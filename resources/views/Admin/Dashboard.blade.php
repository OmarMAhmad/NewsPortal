@extends('Admin.Layout.Master')

@section('Title') Dashboard @endsection

@section('Content')
    <!-- ============================================================== -->
    <!-- Start Right Content Here -->
    <!-- ============================================================== -->
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="{{url('/')}}">NewsPortal</a>
                            </li>
                            <li>
                                <a href="{{url('Admin')}}">Admin</a>
                            </li>
                            <li class="active">
                                Dashboard
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                @if(Auth::User()->email == 'om.ahmad@std.alaqsa.edu.ps')
                    <a href="{{route('user.index')}}">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="fa fa-user-plus widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">
                                        The Number Of Admin : <b>{{$users}}</b>
                                    </p>
                                    <h2> Admin </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- end col -->
                @endif

                <a href="{{route('category.index')}}">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <i class="mdi mdi-format-list-bulleted widget-one-icon"></i>
                            <div class="wigdet-one-content">

                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">
                                    The Number Of Categories : <b>{{$categories}}</b>
                                </p>
                                <h2> Categories <small></small></h2>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- end col -->

                <a href="{{route('post.index')}}">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <i class="fa fa-newspaper-o widget-one-icon"></i>
                            <div class="wigdet-one-content">

                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">
                                    The Number Of Posts : <b>{{$posts}}</b>
                                </p>
                                <h2> Posts <small></small></h2>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- end col -->

                <a href="{{route('comment.index')}}">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <i class="fa fa-comment-o widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">
                                    The Number Of comments : <b>{{$comments}}</b>
                                </p>
                                <h2> Comments <small></small></h2>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- end col -->

            </div>

        </div> <!-- container -->

    </div> <!-- content -->
    <!-- ============================================================== -->
    <!-- End Right Content Here -->
    <!-- ============================================================== -->
@endsection

@section('AddNewScript')
    <!-- Counter js  -->
    <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../plugins/counterup/jquery.counterup.min.js"></script>

    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/raphael/raphael-min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/pages/jquery.dashboard.js"></script>
@endsection
