@extends('layouts.app')

@section('content')

@include('layouts.partials.preload')

@include('layouts.partials.heading' , [
'name' => 'HOME' ,
'heading' => $user->name
])

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">

                @forelse($posts as $post)
                <div class="col-lg-8">


                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="images/blog-thumb-01.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                    <a href="/posts/{{$post->id}}" title="{{$post->title}}"><h4>{{Str::limit($post->title, 30, ' ...')}}</h4></a>
                      <ul class="post-info">
                      <li><a href="/user/{{$post->user->id}}">{{$post->user->name}}</a></li>
                        <li><a href="#">{{$post->created_at->diffForHumans()}}</a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                     <p>   {{Str::limit($post->body, 30, ' ...')}}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              @foreach ($post->tags as $tag)
                            <li class="tag"><a href="/user/{{$post->user->id}}?tag={{$tag->id}}">{{$tag->name}}</a></li>

                              @endforeach
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @empty
                <div class="col-lg-8">

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

                </div>
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
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        {{-- @foreach ($latest as $post)

                      <li><a href="posts/{{$post->id}}">
                          <h5>{{$post->title}}</h5>
                          <span>May 31, 2020</span>
                        </a>
                      </li>
                      @endforeach --}}

                      </li>
                      </ul>
                    </div>
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
            </div>
          </div>
        </div>
      </div>
    </section>


    @include('layouts.partials.footer')

@endsection
