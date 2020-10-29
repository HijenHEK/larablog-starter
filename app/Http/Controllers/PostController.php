<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post ;
use App\Models\Tag;

class PostController extends Controller
{
    //


    public function index(){
        
        $latest = Post::latest()->take(3)->get() ;

        if(request('tag')) {
            $tag = Tag::find(request('tag'));
            $posts = $tag->posts ?? [] ;
        }else {
            $posts = Post::latest()->get() ;

        }
        return view('blog.index' , compact('posts' , 'latest'));
    }
    public function show($id){
        $post = Post::findorfail($id);
        return view('post.show' , compact('post'));
    }
    
    public function create(){
        $tags = Tag::all() ;
        
        return view('post.create' , compact('tags'));
    }
    public function store(){
        

        request()->validate([
            'title' => 'required|min:5' ,
            'body' => 'required|min:5',
            'tag' => 'required|exists:tags,id'
        ]);


        $p = new Post ;
        $p->title = request('title');
        $p->body = request('body');
        $p->tags()->attach(request('tag'));
        $p->save();

        // $p = Post::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        // ]);
        return redirect("/posts/{$p->id}");
    }

    public function edit($id){
        $tags = Tag::all() ;
        $post = Post::findorfail($id);
        return view('post.edit' , compact('post','tags'));
    }
    
    public function update($id){
        

        request()->validate([
            'title' => 'required|min:5' ,
            'body' => 'required|min:5',
            'tag' => 'required|exists:tags,id'
        ]);

        $p = Post::findorfail($id);

        $p->title = request('title');
        $p->body = request('body');
        $p->save();
        $p->tags()->attach(request('tag'));

       
        return redirect("/posts/{$p->id}");
    }
}
