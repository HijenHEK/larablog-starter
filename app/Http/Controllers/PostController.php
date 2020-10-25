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
    
    public function create(){
        return view('create');
    }
    public function store(){
        

        request()->validate([
            'title' => 'required|min:5' ,
            'body' => 'required|min:5'
        ]);


        $p = new Post ;
        $p->title = request('title');
        $p->body = request('body');
        $p->save();

        // $p = Post::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        // ]);
        return redirect("/posts/{$p->id}");
    }

    public function edit($id){
        $post = Post::findorfail($id);
        return view('edit' , compact('post'));
    }
    
    public function update($id){
        

        request()->validate([
            'title' => 'required|min:5' ,
            'body' => 'required|min:5'
        ]);

        $p = Post::findorfail($id);

        $p->title = request('title');
        $p->body = request('body');
        $p->save();

       
        return redirect("/posts/{$p->id}");
    }
}
