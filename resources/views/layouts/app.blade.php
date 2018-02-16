<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Our <Project></Project></title>

    

    <!-- Styles -->
    <!-- Bootstrap stylesheet link -->
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">

</head>
<body id="app-layout" style="font-family: Fira Code;">
    <nav class="navbar navbar-inverse navbar-static-top" style="margin-bottom: 0px;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav" style="font-size: 20px">
                    <li><a href="{{ url('/') }}">OMS</a></li>
                </ul>

                 @if($user = Auth::user())
                <a href="\office" class="btn btn-warning navbar-btn ">Offices</a>
                @endif

                <!-- Right Side Of Navbar -->
                <!-- @if($user = Auth::user())
                    <a href="\insert" class="btn btn-warning navbar-btn navbar-right">Quick Insert</a>    
                @endif -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div id="app">
        @yield('content')
    </div>

    <!-- JavaScripts -->
    <script src="/js/app.js"></script>
    <script src="/js/sweetalert-dev.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/tether.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>

    @include('partials.flash')
</body>
</html>
