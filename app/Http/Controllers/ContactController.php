<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('contact');
    }
    public function store() {
        request()->validate([
            'name' => 'required|min:3',
            'subject' => 'required|min:2',
            'message' => 'required|min:10' ,
            'email' => 'required|email'
        ]);
        Mail::raw(request('message') , function($message){
            $message->to(request('email'))
                    ->subject(request('subject')) ;
        });


        return redirect('/contact')->with('message' , 'success !');
    }
}
