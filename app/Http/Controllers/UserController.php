<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view("users/login");
    }

    public function register()
    {
        return view("users/register");
    }

    public function createuser(Request $request)
    {
        //create New Partner
        $user_details = $request->input();
        $new_user['FirstName'] = $user_details['FirstName'];
        $new_user['lastName'] = $user_details['lastName'];
        $new_user['email'] = $user_details['email'];
        $new_user['phoneNumber'] = $user_details['phoneNumber'];
        $new_user['password'] = Hash::make($user_details['password']);
        $user = Partner::create($new_user);

        if ($user){
            dd('Done');
        }
        else{
            dd("no");
        }
    }
    public function checkpartner(Request $request)
    {
        // Check Partner Logins
        $attributes =  $request -> validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if (auth('partner')->attempt($attributes)) {
            dd("Done");
        }
        dd("no");
    }
}
