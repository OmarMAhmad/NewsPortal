@extends('Admin.Layout.Master')

@section('Title') Add Admin @endsection

@section('Content')

<!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add Admin</h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="{{url('admin')}}">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{route('user.index')}}">Admin</a>
                            </li>
                            <li class="active">
                                Add Admin
                            </li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-sm-6">
                    @include('Admin.Layout.Massages')
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="p-6">
                        <div class="">
                            <form action="{{route('user.store')}}" method="post" class="form-horizontal">
                                @csrf
                                <div class="form-group m-b-20">
                                    <label for="exampleInputEmail1">User Name</label>
                                    <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="username">
                                </div>
                                <div class="form-group m-b-20">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="email">
                                </div>
                                <div class="form-group m-b-20">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                </div>
                                <div class="form-group m-b-20">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="confirm password">
                                </div>
                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container -->

    </div>
    <!-- content -->

@endsection

