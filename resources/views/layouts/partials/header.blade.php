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
          </ul>
        </div>
      </div>
    </nav>
  </header>
