<?php

namespace LaravelForum\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function notifications()
    {
        //mark all notifications as read
        auth()->user()->unreadNotifications->markAsRead();

        //display notifications
        return view('users.notifications',[
            'notifications' =>  auth()->user()->notifications()->paginate(5)
        ]);
    }
}
