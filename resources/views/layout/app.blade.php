<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Dream Travels')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>

    <body>
        <header class="site_header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route ('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route ('travels')}}">Travels</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </header>

        <main class="content">
            @yield('content')
        </main>
        
        <footer class="site_footer"></footer>
 
    </body>

</html>