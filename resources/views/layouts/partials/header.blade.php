<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="/"><h2>Stand Blog<em>.</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            {{-- <li class="nav-item">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>  --}}

        <li class="{{Request::is("posts") ? 'active nav-item' : ' nav-item'}}">

              <a class="nav-link" href="/posts">Blog</a>
            </li>
            <li class="{{Request::is("about") ? 'active nav-item' : ' nav-item'}}">
                <a class="nav-link" href="/about">About Us</a>
              </li>
            <li class="{{Request::is("contact") ? 'active nav-item' : ' nav-item'}}">
              <a class="nav-link"  href="/contact">Contact Us</a>
            </li>
            @auth
            <li class="{{Request::is("posts/create") ? 'active nav-item' : ' nav-item'}}">
                <a class="nav-link"  href="/posts/create">New Post</a>
            </li>
            @endauth
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                                <a class="dropdown-item" href="/user/{{Auth::user()->id}}">
                                {{ __('Profile') }}
                                </a>
                        </div>
                    </li>
                @endguest
                <!-- Authentication Links -->

          </ul>
        </div>
      </div>
    </nav>
  </header>
