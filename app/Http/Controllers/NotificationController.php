<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function read()
    {
        auth('partner')->user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }

    public function SingleRead($id)
    {
        $notification = auth('partner')->user()->unreadNotifications()
            ->where('id',$id)
            ->get()->toArray();
        $post_id = $notification[0]['data']['post_id'];
        auth('partner')->user()->unreadNotifications->where('id', $id)->markAsRead();
        return redirect('showadvertisment/'.$post_id);
    }

}
