<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function dashboard()
    {
        if (empty(auth('partner')->user()->id)) {
            return view("errors/404");
        }
        $total_ads = Advertisement::query()
            ->where('partner_id',auth('partner')->user()->id)
            ->count();

        return view("partner/partnerdashboard",compact('total_ads'));
    }
}
