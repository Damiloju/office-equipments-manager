<html lang="en" style="height: auto; min-height: 100%;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>MinimalLite Admin - Dashboard</title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="/bootstrap/bootstrap 4/css/bootstrap.css">

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="/bootstrap/bootstrap 4/css/bootstrap-extend.css">

    <!-- theme style -->
    <link rel="stylesheet" href="/css/master_style.css">

    <!-- MinimalLite Admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/css/_all-skins.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
        <a href="index.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <b class="logo-mini">
                <span class="light-logo"><img src="../images/aries-light.png" alt="logo"></span>
                <span class="dark-logo"><img src="../images/aries-dark.png" alt="logo"></span>
            </b>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
		  <img src="../images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="../images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            {{--<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>--}}

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
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
                        <span><h3>Juliya Brus</h3> >>></span>
                    </a>
                </li>
                <li class="header nav-small-cap">PERSONAL</li>
                <li class="active">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-building"></i>
                        <span>Offices</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-plug"></i> <span>Equipments</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!---//////////////////////--->
            <div class="row">
                <div class="col-12 ">
                    <div class="box">
                        <div class="row no-gutters py-2">

                            <div class="col-sm-6 col-lg-3">
                                <div class="box-body br-1 border-light">
                                    <div class="flexbox mb-1">
                                          <span>
                                            <i class="ion-person font-size-26"></i><br>
                                            New Users
                                          </span>
                                        <span class="text-primary font-size-40">34</span>
                                    </div>
                                    <div class="progress progress-xxs mt-10 mb-0">
                                        <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-3 hidden-down">
                                <div class="box-body br-1 border-light">
                                    <div class="flexbox mb-1">
                                          <span>
                                            <i class="ion-document font-size-26"></i><br>
                                            Today Invoices
                                          </span>
                                        <span class="text-info font-size-40">18</span>
                                    </div>
                                    <div class="progress progress-xxs mt-10 mb-0">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                                <div class="box-body br-1 border-light">
                                    <div class="flexbox mb-1">
                                      <span>
                                        <i class="ion-information font-size-26"></i><br>
                                        Open Issues
                                      </span>
                                        <span class="text-warning font-size-40">46</span>
                                    </div>
                                    <div class="progress progress-xxs mt-10 mb-0">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                                <div class="box-body">
                                    <div class="flexbox mb-1">
                                      <span>
                                        <i class="ion-folder font-size-26"></i><br>
                                        New Projects
                                      </span>
                                        <span class="text-danger font-size-40">12</span>
                                    </div>
                                    <div class="progress progress-xxs mt-10 mb-0">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- AREA CHART -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Area Chart</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <canvas id="areaChart" style="height: 350px; width: 465px;" width="465" height="350"></canvas>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">

            </ul>
        </div>
        © 2017
    </footer>
</div>
<!-- ./wrapper -->

</body>
</html>