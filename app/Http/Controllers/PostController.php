<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post ;

class PostController extends Controller
{
    //


    public function index(){
        $posts = Post::latest()->get() ;
        dd($posts) ;
        return view('posts.index' , compact('posts'));
    }
    public function show($id){
        $post = Post::findorfail($id);
        dd($post);
        return view('posts.index' , compact('post'));
    }
}
