@extends('Admin.Layout.Master')

@section('Title') Manage Admin @endsection

@section('Content')
    <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Manage Admin</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="{{url('admin')}}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{route('user.index')}}">Admin</a>
                                </li>
                                <li class="active">
                                    Manage Admin
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

                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-box m-t-20">
                                <div class="m-b-30">
                                    <a href="{{route('user.create')}}">
                                        <button id="addToTable" class="btn btn-success waves-effect waves-light">
                                            Add <i class="mdi mdi-plus-circle-outline"></i>
                                        </button>
                                    </a>
                                </div>

                                <div class="table-responsive">
                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <th scope="row"> {{$loop->iteration}} </th>
                                                    <th> {{$user->name}} </th>
                                                    <th> {{$user->email}} </th>
                                                    <th> &deg; &deg; &deg; &deg; &deg; &deg; &deg; &deg;</th>
                                                    <th>
                                                        <a href="{{route('user.edit', $user)}}">
                                                            <i class="fa fa-pencil" style="color: #29b6f6;"></i>
                                                        </a>
                                                        &nbsp
                                                        <form method="Post" action="{{route('user.destroy', $user)}}" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" style="background-color: transparent; border: none"> {{--  onclick="return confirm('Do you reaaly want to delete ?')" --}}
                                                                <i class="fa fa-trash-o" style="color: #f05050"></i>
                                                            </button>
                                                        </form>
                                                    </th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!--- end row -->

                </div>
                <!-- container -->

            </div> <!-- content -->
@endsection
