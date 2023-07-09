<?php

namespace App\Http\Controllers\broker;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\ReferralCode;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use http\Url;
use Illuminate\Http\Request;
use Mockery\Exception;
use App\Utils\PublicFunctions;

class BrokerDashboardController extends Controller
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


    public function index(Request $request)
    {
        //Check user logged or not
        $notLogged = $this->PublicFunctions->CheckUser();
        if ($notLogged){
            return view("lognsAndRegisterPages/login");
        }

        $categories = Category::query()
            ->get();

        $advertisments = Advertisement::query()
            ->whereNot('partner_id',auth('partner')->user()->id)
            ->get();

        if($request->ajax()){
            $selected_categories = $request->categories;
            $categories = Category::query()
                ->get();
            $advertisments = Advertisement::query()
                 ->whereNot('partner_id',auth('partner')->user()->id)
                 ->where('category_id',$selected_categories)
                 ->get();

            return view('broker/productsList',compact('advertisments','categories'))->render();
        }

        return view('broker/ads',compact('advertisments','categories'));
    }

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

        return view('broker/singleadd',compact('singleAdd','sub_images','main_image'));

    }

    public function generateReferral($id)
    {
        //Check user logged or not
        $notLogged = $this->PublicFunctions->CheckUser();
        if ($notLogged){
            return view("lognsAndRegisterPages/login");
        }

        try {
            //Generate Code
            $new_referral['referral_code'] = "RC". $this->PublicFunctions->generateUniqueCode();
            $new_referral['partner_id'] = (auth('partner')->user()->id);
            $new_referral['post_id'] = $id;
            $check_already_referrals = ReferralCode::query()
                ->where('partner_id',auth('partner')->user()->id)
                ->get();

            //Check Already have referral
            foreach ($check_already_referrals as $check_already_referral){
                if ($check_already_referral['post_id'] == $id){
                    return response()->json('fail');
                }
            }

            //Save data
            $referral = ReferralCode::create($new_referral);
            $referral_link = "http://127.0.0.1:8000/rc/". $new_referral['referral_code'];

            if ($referral){
                return response()->json($referral_link);
            }

        }

        catch (Exception $e){
            dd($e);
        }

    }

    public function referralCodes()
    {
        //Check user logged or not
        $notLogged = $this->PublicFunctions->CheckUser();
        if ($notLogged){
            return view("lognsAndRegisterPages/login");
        }

        $referralcodes = ReferralCode::query()
            ->join('advertisements', 'advertisements.post_id', '=', 'referral_codes.post_id')
            ->where('referral_codes.partner_id',auth('partner')->user()->id)
            ->select('referral_code','post_name')
            ->get();

        return view('broker/referralcodes',compact('referralcodes'));

    }
}
