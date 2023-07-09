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
            dd($check_ref);
        }
        dd("Invalid");
    }
}
