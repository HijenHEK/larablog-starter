<header  class="header">
    <nav class="nav">
        <a class="brand" href="/">
            <h2>THE LOG</h2>
        </a>


        <div class="right">
            <div class="nav-bar" id="navbar">

                <div class="toggler" onclick="toggleMenu()">

                    <i class="fa fa-bars fa-lg"></i>

                </div>

                <ul class="nav-items">




                    <li class="nav-item  {{Request::is("/") || Request::is("posts") ? 'active' : ''}}">

                        <a class="nav-link" href="/posts">Blog</a>
                    </li>
                    <li class="nav-item {{Request::is("about") ? 'active' : ''}}">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item {{Request::is("contact") ? 'active' : ''}}">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                    @auth
                    <li class="nav-item  {{Request::is("posts/create") ? 'active' : ''}}">
                        <a class="nav-link" href="/posts/create">New Post</a>
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
                    @endguest

                    <!-- Authentication Links -->

                </ul>
            </div>


            @auth
            <div class="drop">
                <a id="drop" class="drop-toggler"  onclick="toggleDrop()" href="#" role="button">
                    <i class="fa fa-user"></i>
                    {{ Auth::user()->name }}
                </a>

                <div class="drop-menu" >
                    <a class="drop-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a class="drop-item" href="/notify">
                        {{ __('Notifications') }}
                    </a>
                    <a class="drop-item" href="/user/{{Auth::user()->id}}">
                        {{ __('Profile') }}
                    </a>
                </div>
            </div>
            @endauth
        </div>
    </nav>
</header>
