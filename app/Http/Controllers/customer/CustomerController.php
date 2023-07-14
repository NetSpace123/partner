<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\ReferralCode;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getRefCustomer($id)
    {
        //check Valid Ref num or not
        $check_ref = ReferralCode::query()
            ->where('referral_code',$id)
            ->exists();

        if ($check_ref == true){

            $product = ReferralCode::query()
                ->join('advertisements', 'advertisements.post_id', '=', 'referral_codes.post_id')
                ->where('referral_codes.referral_code','=',$id)
                ->get();

            $sub_images = explode("|", $product[0]->sub_images );

            return view('customers.dashboard',compact('product','sub_images'));
        }
        dd("Invalid referral Code");
    }
}
