@extends('layouts.app')

@section('content')

@include('layouts.partials.preload')

@include('layouts.partials.heading' , [
'name' => 'Post' ,
'heading' => $post->title
])

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="images/blog-post-02.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Lifestyle</span>
                    <a href="/posts/{{$post->id}}"><h4>{{$post->title}}</h4></a>
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">May 12, 2020</a></li>
                        <li><a href="#">10 Comments</a></li>
                      </ul>
                      <p>{{$post->body}}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              @foreach ($post->tags as $tag)

                                <li><a href="/posts?tag={{$tag->id}}">{{$tag->name}}</a></li>

                              @endforeach
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  {{-- <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>4 comments</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <div class="author-thumb">
                            <img src="images/comment-author-01.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Charles Kate<span>May 16, 2020</span></h4>
                            <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                          </div>
                        </li>
                        <li class="replied">
                          <div class="author-thumb">
                            <img src="images/comment-author-02.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Thirteen Man<span>May 20, 2020</span></h4>
                            <p>In porta urna sed venenatis sollicitudin. Praesent urna sem, pulvinar vel mattis eget.</p>
                          </div>
                        </li>
                        <li>
                          <div class="author-thumb">
                            <img src="images/comment-author-03.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                            <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                          </div>
                        </li>
                        <li class="replied">
                          <div class="author-thumb">
                            <img src="images/comment-author-02.jpg" alt="">
                          </div>
                          <div class="right-content">
                            <h4>Thirteen Man<span>May 22, 2020</span></h4>
                            <p>Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo.</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div> --}}
                </div>
                <div class="col-lg-12">
                  {{-- <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <form id="comment" action="#" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Subject">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="col-lg-4">
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
                        <li><a href="post-details.html">
                          <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                          <span>May 31, 2020</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                          <span>May 28, 2020</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                          <span>May 14, 2020</span>
                        </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
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
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>


@include('layouts.partials.footer')

@endsection
