@extends('Admin.Layout.Master')

@section('Title') Edit Admin @endsection

@section('Content')
    <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Edit Admin</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="{{url('admin')}}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{route('user.index')}}">Admin</a>
                                </li>
                                <li class="active">
                                    Edit Admin
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Edit Admin</b></h4>
                            <hr/>

                            <div class="col-md-3">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <form class="form-horizontal" name="category" method="post">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Full Name</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" value="OldFullName" name="full_name" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Username</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" value="OldUsername" name="username" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">&nbsp;</label>
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

@endsection
