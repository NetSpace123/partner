<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\AdvertisementSubImage;
use App\Models\Category;
use App\Models\District;
use App\Notifications\AdvertisementAddingNotification;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Mockery\Exception;
use App\Utils\PublicFunctions;

class AdvertisementController extends Controller
{
    /**
     * All Utils instance.
     *
     */
    protected $PublicFunctions;

    public function __construct(PublicFunctions $PublicFunctions)
    {
        $this->PublicFunctions = $PublicFunctions;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Check user logged or not
        $notLogged = $this->PublicFunctions->CheckUser();
        if ($notLogged){
            return view("lognsAndRegisterPages/login");
        }

        $advertisments = Advertisement::query()
            ->where('partner_id',auth('partner')->user()->id)
            ->get();

        return view('partner/advertisements',compact('advertisments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Check user logged or not
        $notLogged = $this->PublicFunctions->CheckUser();
        if ($notLogged){
            return view("lognsAndRegisterPages/login");
        }

        $categories = Category::query()
            ->get();
        $districts = District::query()
            ->get();

        return view('partner/add-advertisement',compact('categories','districts'));
    }

    public function test()
    {
        $singleAdd = Advertisement::query()
            ->where('post_id','PID12005')
            ->with('district')
            ->with('category')
            ->get();

        $main_image = $singleAdd[0]->main_image;
        $sub_images = explode("|", $singleAdd[0]->sub_images);

        return view('partner/testadd',compact('singleAdd','sub_images','main_image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Check user logged or not
        $notLogged = $this->PublicFunctions->CheckUser();
        if ($notLogged){
            return view("lognsAndRegisterPages/login");
        }

        try {
            $advertisement['post_id'] = IdGenerator::generate(['table'=>'advertisements','field'=>'post_id','length'=>8,'prefix'=>'PID12']);
            $advertisement['partner_id'] = auth('partner')->user()->id;
            $advertisement['post_name'] = $request->input('advertisement-name');
            $advertisement['contact_num'] = $request->input('contact-number');
            $advertisement['description'] = $request->input('description');
            $advertisement['addvertisement_price'] = $request->input('addvertisement_price');
            $advertisement['commission_percentage'] = $request->input('commission_percentage');
            $post_catagories = $request->input('categories');
            foreach ($post_catagories as $post_catagory){
                $advertisement['category_id'] = $post_catagory;
            }
            $district_ids = $request->input('district');
            foreach ($district_ids as $district_id ){
                $advertisement['district_id'] = $district_id;
            }

            //Save main image
            $img_path = $request ->file('image');
            $imgName = time().'.'.$img_path->extension();
            $img_path->move(public_path('images'),$imgName);
            $advertisement['main_image'] = $imgName;

            //save sub images
            $newImages = array();
            $images = $request->file('images');
            $imgNameCode = intval( IdGenerator::generate(['table' => 'advertisements', 'field' => 'sub_images', 'length' => 8, 'prefix' => 1]));
            foreach ($images as $image) {
                $imgNameCode++;
                $advertisementImgName = $imgNameCode . '.' . $image->extension();
                $image->move(public_path('images'), $advertisementImgName);
                $newImages[] = $advertisementImgName;
            }
            $advertisement['sub_images'] = implode("|", $newImages);

            //save Details in Advertisment table
            $newAdvertisment = Advertisement::create($advertisement);

            if ($newAdvertisment){
                $user = auth('partner')->user();
                Notification::send($user, new AdvertisementAddingNotification($newAdvertisment));
                return redirect(route('viewadvertisement'));
            }
            else{
                dd("error");
            }
        }
        catch (Exception $exception){
            dd($exception);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Check user logged or not
        $notLogged = $this->PublicFunctions->CheckUser();
        if ($notLogged){
            return view("lognsAndRegisterPages/login");
        }

        $singleAdd = Advertisement::query()
            ->where('post_id',$id)
            ->with('district')
            ->with('category')
            ->get();

        $main_image = $singleAdd[0]->main_image;
        $sub_images = explode("|", $singleAdd[0]->sub_images);

        return view('partner/singlead',compact('singleAdd','sub_images','main_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $advertisement = Advertisement::where('post_id',$id)->delete();
            return redirect()->route('viewadvertisement')->with('status','successfully update your job');
        }
        catch (Exception $exception){
            dd($exception);
        }
    }
}
