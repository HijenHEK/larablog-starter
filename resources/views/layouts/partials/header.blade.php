<header class="header">
    <nav class="nav">
        <a class="brand" href="/"><h2>THE LOG</h2></a>


        <div class="nav-bar" id="navbar">

            <div class="toggler">

                    <i class="fa fa-bars"></i>

            </div>

          <ul class="nav-items">




            <li class="nav-item  {{Request::is("/") || Request::is("posts") ? 'active' : ''}}">

              <a class="nav-link" href="/posts">Blog</a>
            </li>
            <li class="nav-item {{Request::is("about") ? 'active' : ''}}">
                <a class="nav-link" href="/about">About Us</a>
              </li>
            <li class="nav-item {{Request::is("contact") ? 'active' : ''}}">
              <a class="nav-link"   href="/contact">Contact Us</a>
            </li>
            @auth
            <li class="nav-item  {{Request::is("posts/create") ? 'active' : ''}}">
                <a class="nav-link"  href="/posts/create">New Post</a>
            </li>
            @endauth
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item {{Request::is("login") ? 'active' : ''}}">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item {{Request::is("register") ? 'active' : ''}}">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle p-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="/notify">
                                    {{ __('Notifications') }}
                                </a>
                                <a class="dropdown-item" href="/user/{{Auth::user()->id}}">
                                {{ __('Profile') }}
                                </a>
                        </div>
                    </li>
                @endguest
                <!-- Authentication Links -->

          </ul>
      </div>
    </nav>
  </header>
