<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function dashboard()
    {
        if (empty(auth('partner')->user()->id)) {
            return view("404/404");
        }
        return view("partner/partnerdashboard");
    }
}
