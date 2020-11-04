<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    //


    public function store() {
        $request= request()->validate([
            'name' => 'required|min:3',
            'subject' => 'required|min:2',
            'message' => 'required|min:10' ,
            'email' => 'required|email'
        ]);
        // Mail::raw(request('message') , function($message){
        //     $message->to(request('email'))
        //             ->subject(request('subject')) ;
        // });
        Mail::to(request('email'))->send(new ContactMe($request));

        return redirect('/contact')->with('message' , 'success !');
    }

    public function notify() {

        request()->user()->notify(new PaymentReceived);
        // Notification::send(request()->user() , new PaymentReceived);
        return back()->with('message' , 'success !');

    }
}
