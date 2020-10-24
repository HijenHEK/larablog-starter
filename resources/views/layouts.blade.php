<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    
      <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    
        <title>Stand Blog - Post Details</title>
    
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    
        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="/assets/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/css/templatemo-stand-blog.css">
        <link rel="stylesheet" href="/assets/css/owl.css">
    <!--
    
    TemplateMo 551 Stand Blog
    
    https://templatemo.com/tm-551-stand-blog
    
    -->
      </head>
    
      <body class="antialiased">


        <header class="">
            <nav class="navbar navbar-expand-lg">
              <div class="container">
                <a class="navbar-brand" href="index.html"><h2>Stand Blog<em>.</em></h2></a>
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

        @yield('content')

        


        
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/owl.js"></script>
    <script src="/assets/js/slick.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
