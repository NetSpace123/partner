<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function dashboard()
    {
        if (empty(auth('partner')->user()->id)) {
            return view("errors/errors");
        }
        return view("partner/partnerdashboard");
    }
}
