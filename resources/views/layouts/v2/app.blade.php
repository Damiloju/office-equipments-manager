<html lang="en" style="height: auto; min-height: 100%;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/img/logo.jpg">

    <title>OMS - Dashboard</title>

    <link rel="stylesheet" href="/css/sweetalert.css">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="/bootstrap/bootstrap 4/css/bootstrap.css">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="/bootstrap/bootstrap 4/css/bootstrap-extend.css">

    <link rel="stylesheet" href="/css/master_style.css">
    <link rel="stylesheet" href="/css/_all-skins.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style type="text/css">
        .jqstooltip
        {
            position: absolute;left: 0px;top: 0px;visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0,0,0,0.6);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;white-space: nowrap;
            padding: 5px;border: 1px solid white;box-sizing: content-box;
            z-index: 10000;
        }
        .jqsfield
        {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body class="sidebar-mini skin-blue" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{route('home')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <b class="logo-mini">
                {{--<span class="light-logo"><img src="/img/logo.jpg" alt="logo"></span>
                <span class="dark-logo"><img src="/img/logo.jpg" alt="logo"></span>--}}
                <h2>OMS</h2>
            </b>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            {{--<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>--}}

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="{{ route('home') }}" class="dropdown-toggle">
                            Office Management System
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height: auto;">

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu tree" data-widget="tree">
                <li class="user-profile treeview">
                    <a href="#">
                        <span><h3>{{auth()->user()->name}}</h3> >>></span>
                    </a>
                </li>
                <li class="header nav-small-cap">PERSONAL</li>
                <li class="treeview">
                    <a href="{{route('home')}}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{route('office')}}">
                        <i class="fa fa-building"></i>
                        <span>Offices</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{route('equipment')}}">
                        <i class="fa fa-plug"></i> <span>Equipments</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="{{ url('/logout') }}">
                        <i class="fa fa-sign-out"></i> <span>Logout</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
        <div id="app">
            @yield('content')
        </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">

            </ul>
        </div>
        ©TimothyMee 2017
    </footer>
</div>
<!-- ./wrapper -->

<script src="/js/app.js"></script>
<script src="/js/sweetalert-dev.js"></script>
</body>
</html>