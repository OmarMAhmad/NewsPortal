<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('../plugins/switchery/switchery.min.css')}}">
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

    <!-- App title -->
    <title>News Portal | @yield('Title')</title>
    <link rel="stylesheet" href="{{asset('../plugins/morris/morris.css')}}">
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{url('Admin')}}" class="logo">
                <span>NP<span>Admin</span></span>
                <i class="mdi mdi-layers"></i>
            </a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{url('/')}}" class="logo">
                    <span>NEWS<span>PORTAL</span></span>
                    <i class="mdi mdi-layers"></i>
                </a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Navbar-left -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>

                    </ul>

                    <!-- Right(Notification) -->
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown user-box">
                            <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown"
                               aria-expanded="true">
                                <img src="{{asset('assets/images/users/users.jpg')}}" alt="user-img" class="img-circle user-img">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li>
                                    <h5>
                                        Hi, Admin
                                        <span style='color: #7fc1fc; display: block; padding-top: 5px'>
                                            {{Auth::User()->name}}
                                        </span>
                                    </h5>
                                </li>

                                <li>
                                    <a href="{{route('user.edit', Auth::User()->id)}}">
                                        <i class="ti-settings m-r-5"></i>
                                        Chnage Password
                                    </a>
                                </li>

                                <li>
                                    <a href="{{url('logout')}}">
                                        <i class="ti-power-off m-r-5"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul> <!-- end navbar-right -->

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
    </div>
    <!-- Top Bar End -->
