@extends('Admin.Layout.Master')

@section('Title') Chnage Password @endsection

@section('Content')

    <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Chnage Password</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="dashboard.php">Admin</a>
                                </li>
                                <li class="active">
                                    Change Password
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
                            <h4 class="m-t-0 header-title"><b>Change Password </b></h4>
                            <hr/>

                            <div class="row">
                                <div class="col-sm-6">
                                    @include('Admin.Layout.Massages')
                                </div>

                                <div class="row">
                                    <div class="col-md-10">
                                        <form action="{{route('user.update', $user)}}" method="post" class="form-horizontal">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Current Password</label>
                                                <div class="col-md-8">
                                                    <input type="password" name="current_password" placeholder="password" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">New Password</label>
                                                <div class="col-md-8">
                                                    <input type="password" name="password" placeholder="new password" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Confirm Password</label>
                                                <div class="col-md-8">
                                                    <input type="password" name="password_confirmation" placeholder="confirm password" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">&nbsp;</label>
                                                <div class="col-md-8">
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
        </div>
@endsection
