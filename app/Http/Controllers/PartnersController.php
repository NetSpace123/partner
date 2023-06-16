<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class PartnersController extends Controller
{
    public function login()
    {
        return view("partners/login");
    }

    public function register()
    {
        return view("partners/register");
    }

    public function createuser(Request $request)
    {
        //Check EMAIL Already use
        $validator = $request -> validate([
            'email'=>'required|email|unique:partner',
            'password'=>'required|min:6'
        ]);
        if ($validator){
            //create New Partner
            $user_details = $request->input();
            $new_user['FirstName'] = $user_details['FirstName'];
            $new_user['lastName'] = $user_details['lastName'];
            $new_user['email'] = $user_details['email'];
            $new_user['phoneNumber'] = $user_details['phoneNumber'];
            $new_user['password'] = Hash::make($user_details['password']);
            $user = Partner::create($new_user);

            $credentials = $request->only('email', 'password');
            if (Auth("partner")->attempt($credentials)) {
                // Authentication passed...
                return redirect()->route('home')->with('success', 'You are logged in');
            }
            return redirect()->route('partner-register');
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

//    public function logout() {
//        Session::flush();
//        Auth::logout();
//        return Redirect('login');
//    }
}
