<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use App\Notifications\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('contact');
    }
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
    public function notif() {
        

        Notification::send('k.hijen@gmail.com',new Contact());
        return redirect('/contact')->with('message' , 'success !');
    }
}
