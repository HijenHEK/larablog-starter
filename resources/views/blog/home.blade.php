@extends('layouts.app')

@section('content')

@include('layouts.partials.preload')

@include('layouts.partials.heading' , [
'name' => 'HOME' ,
'heading' => $user->name
])

<section class="main">

            <div class="posts">

                @forelse($posts as $post)


                  <div class="post">
                    {{-- <div class="blog-thumb">
                      <img src="images/blog-thumb-01.jpg" alt="">
                    </div> --}}
                    <div class="content">
                      <span>Lifestyle</span>
                    <a class="title" href="/posts/{{$post->id}}" title="{{$post->title}}"><h4>{{Str::limit($post->title, 30, ' ...')}}</h4></a>
                      <ul class="info">
                      <li><a href="/user/{{$post->user->id}}">{{$post->user->name}}</a></li>
                        <li><a href="#">{{$post->created_at->diffForHumans()}}</a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                     <p class="body">   {{Str::limit($post->body, 30, ' ...')}}</p>
                      <div class="options">

                            <ul class="tags">
                              <li><i class="fa fa-tags"></i></li>
                              @foreach ($post->tags as $tag)
                            <li class="tag"><a href="/posts?tag={{$tag->id}}">{{$tag->name}}</a></li>

                              @endforeach
                            </ul>

                    </div>
                  </div>
                </div>
                @empty

                    @if ($profile)

                    <h4>you didnt share anything with us !</h4>

                    <div class="btn btn-success mt-3">
                        <a class="text-white" href="/posts/create">
                            Create One
                        </a>
                    </div>

                    @else

                    <h4>no post yet ! from {{$user->name}}</h4>

                    @endif

                @endforelse

                {{-- <div class="col-lg-12">
                  <ul class="page-numbers">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </div> --}}

          </div>
            <div class="sidebar">

                    <form class="item search" id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>

                    <div class="item tag-list">
                        <div class="heading">
                            <i class="fa fa-tags"></i>

                            <h2>{{$user->name}}'s Tags</h2>
                        </div>
                        <div class="content">
                            <ul class="tags">
                                @foreach ($tags as $tag)
                            <li class="tag"><a href="/user/{{$user->id}}/?tag={{$tag->id}}">{{$tag->name}}</a></li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                {{-- <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">- Nature Lifestyle</a></li>
                        <li><a href="#">- Awesome Layouts</a></li>
                        <li><a href="#">- Creative Ideas</a></li>
                        <li><a href="#">- Responsive Templates</a></li>
                        <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                        <li><a href="#">- Creative &amp; Unique</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">PSD</a></li>
                        <li><a href="#">Responsive</a></li>
                      </ul>
                    </div>
                  </div>
                </div> --}}

      </div>
    </section>


    @include('layouts.partials.footer')

@endsection
