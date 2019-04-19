<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        <title>Patricija Radivoj</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>

        <div class="d-flex">
      
          <!-- Sidebar -->
          <div id="sidebar-wrapper" class="desktop">
            <div class="list-group list-group-flush text-center">
              <img class="logo" src="{{ asset('img/logo/logo.png') }}" alt="">
              <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-dark">Home</a>
              <a href="{{ route('portfolio') }}" class="list-group-item list-group-item-action bg-dark">Portfolio</a>
              <a href="{{ route('about') }}" class="list-group-item list-group-item-action bg-dark">About</a>
              <a href="{{ route('contact') }}" class="list-group-item list-group-item-action bg-dark">Contact</a>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" value="Logout" class="btn btn-link">
            </form>
            </div>
          </div>
          <!-- /#sidebar-wrapper -->
      
          <!-- Page Content -->
          <div id="page-content-wrapper">
      
            <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark phone">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <span class="text-center">
                    <img class="logo" src="{{ asset('img/logo/logo.png') }}" alt="">
                </span>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Photos
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item bg-dark" href="#">Show</a>
                          <a class="dropdown-item bg-dark" href="#">Upload</a>
                        </div>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Projects
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item bg-dark" href="#">Show</a>
                          <a class="dropdown-item bg-dark" href="#">Create</a>
                        </div>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Contact
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item bg-dark" href="#">Create</a>
                          <a class="dropdown-item bg-dark" href="#">Edit</a>
                        </div>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          About
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item bg-dark" href="#">Create</a>
                          <a class="dropdown-item bg-dark" href="#">Edit</a>
                        </div>
                      </li>

                      <li class="">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input type="submit" value="Logout" class="btn btn-link">
                            </form>
                      </li>



                  </ul>
                </div>

            </nav>
      
            
            @yield('content')
            
          </div>
          <!-- /#page-content-wrapper -->
      
        </div>
        <!-- //d-flex -->
        <footer class="phone text-center mt-3">
          <p class="footer_text">&copy {{ date('Y') }} Patricija Radivoj - Interior Design</p>
        </footer>
        @yield('footer')
        
        <!-- Menu Toggle Script -->
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('scripts')

      </body>
</html>


       
