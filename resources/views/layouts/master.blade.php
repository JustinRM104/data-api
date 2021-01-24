<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Justin Rodriguez Montoya">
    <title>OpenApi</title>

    <script src="{{ asset('jquery/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
</head>
<body>

<header>
    @yield('header')
</header>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    @section('nav')
        <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">OpenApi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link inline" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inline" href="{{ route('home') }}">Documentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inline" href="{{ route('home') }}">Demo</a>
                </li>
            </ul>

            <div class="form-inline my-2 my-lg-0">
            <a class="nav-link text-light" href="">Login</a>
            </div>
        </div> 
    @show
</nav>

<main>
    @yield('content')
</main>

<footer>
    @yield('footer')
</footer>


    
</body>
</html>