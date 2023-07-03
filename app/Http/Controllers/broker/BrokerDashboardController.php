<?php

namespace App\Http\Controllers\broker;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\ReferralCode;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Mockery\Exception;

class BrokerDashboardController extends Controller
{
    public function index()
    {
        if (empty(auth('partner')->user()->id)) {
            return view("lognsAndRegisterPages/login");
        }

        $advertisments = Advertisement::query()
            ->whereNot('partner_id',auth('partner')->user()->id)
            ->get();

        return view('broker/ads',compact('advertisments'));
    }

    public function show($id)
    {
        if (empty(auth('partner')->user()->id)) {
            return view("errors/404");
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
        if (empty(auth('partner')->user()->id)) {
            return view("errors/404");
        }

        try {
            //Generate Code
            $new_referral['referral_code'] = IdGenerator::generate(['table'=>'referral_codes','field'=>'referral_code','length'=>8,'prefix'=>'RC']);
            $new_referral['partner_id'] = (auth('partner')->user()->id);
            $new_referral['post_id'] = $id;
            $referral = ReferralCode::create($new_referral);
            $referral_link = "http://127.0.0.1:8000/". $new_referral['referral_code'];

            if ($referral){
                return response()->json($referral_link);
            }

        }

        catch (Exception $e){
            dd($e);
        }

    }
}
