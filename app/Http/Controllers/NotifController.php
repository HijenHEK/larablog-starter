<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;

class NotifController extends Controller
{
    //



    public function index() {
        // ddd(auth()->user()->unreadNotifications);

        return view('notifs' , [
            'readNotifs' => auth()->user()->readNotifications,
            'unreadNotifs' => tap(auth()->user()->unreadNotifications)->markAsRead(),
        ]);

    }

    public function store() {

        request()->user()->notify(new PaymentReceived(900));
        // Notification::send(request()->user() , new PaymentReceived);
        return back()->with('message' , 'success !');

    }
}
