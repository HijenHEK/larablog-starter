<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post ;

class PostController extends Controller
{
    //


    public function index(){
        $latest = Post::latest()->take(3)->get() ;
        $posts = Post::latest()->get() ;
        return view('index' , compact('posts' , 'latest'));
    }
    public function show($id){
        $post = Post::findorfail($id);
        return view('post-details' , compact('post'));
    }
}
