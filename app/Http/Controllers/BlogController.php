<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //

    public function index(){

        $tags = Tag::all() ;

        if(request('tag')) {
            $tag = Tag::find(request('tag'));
            $posts = $tag->posts ?? [] ;
        }else {
            $posts = Post::latest()->get() ;

        }

        return view('blog.index' , compact('posts' , 'tags'));
    }
    public function about() {
        return view('blog.about');
    }
    public function contact() {
        return view('blog.contact');
    }

    public function profile(User $user) {


        $profile = false ;
        if(Auth::check() && Auth::user() == $user) {
            $profile = true ;
        }

        $posts = $user->posts ;
        if(request('tag')) {
            $tag = Tag::find(request('tag'));
            $posts = $tag->posts()->where('user_id' , '=' , $user->id)->get() ?? [] ;
        }

        return view('blog.home' , compact('user','profile','posts'));
    }
}
