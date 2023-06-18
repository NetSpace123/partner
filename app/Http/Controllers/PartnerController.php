<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function dashboard()
    {
        if (empty(auth('partner')->user()->id)) {
            return view("errors/404");
        }
        connectify('success', 'You are logged In !', 'Continue with your work 🔥');
        return view("partner/partnerdashboard");
    }
}
