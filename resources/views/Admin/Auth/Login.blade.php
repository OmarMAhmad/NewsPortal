<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="News Portal.">
    <meta name="author" content="PHPGurukul">

    <!-- App title -->
    <title>News Portal | Admin Login</title>

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <script src="assets/js/modernizr.min.js"></script>
</head>

<body class="bg-transparent">

<!-- HOME -->
<section>
    <div class="container-alt">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="m-t-40 account-pages">
                        <div class="text-center account-logo-box">
                            <h2 class="text-uppercase">
                                <a href="index.php" class="text-success">
                                    <span> <img src="assets/images/logo.png" alt="" height="56"> </span>
                                </a>
                            </h2>
                        </div>
                        <br>
                        <div class="col-sm-12">
                            @include('Admin.Layout.Massages')
                        </div>
                        <div class="account-content">
                            <form method="post" action="{{url('auth')}}" class="form-horizontal">
                                @csrf
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="email" required name="email" placeholder="Enter Email">
                                    </div>
                                </div>

                                <div class="form-group" style="margin-bottom: 35px">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="password" name="password" required placeholder="Password" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group account-btn text-center m-t-10" style="position: relative">
                                    <div class="col-xs-12">
                                        <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="login">
                                            Log In
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- end card-box-->

                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>
<!-- END HOME -->

@include('Admin.Layout.Script')
</body>
</html>
