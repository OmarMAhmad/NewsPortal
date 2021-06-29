@extends('Admin.Layout.Master')

@section('Title') Manager Posts @endsection

@section('Content')
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Manage Posts </h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="{{url('admin')}}">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{route('post.index')}}"> Posts </a>
                            </li>
                            <li class="active">
                                Manage Post
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
                                <a href="{{route('post.create')}}">
                                    <button id="addToTable" class="btn btn-success waves-effect waves-light">
                                        Add <i class="mdi mdi-plus-circle-outline"></i>
                                    </button>
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-colored table-centered table-inverse m-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title Post</th>
                                        <th>Feature Image</th>
                                        <th>User Name</th>
                                        <th>Category Name</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($posts as $post)
                                            <tr>
                                                <th> {{$loop->iteration}} </th>
                                                <th> {{$post->title}} </th>
                                                <th>
                                                    <img src="{{asset($post->image)}}" width="80" style="border-radius: 5px" alt="PostImage">
                                                </th>
                                                <th> {{$post->user->name}} </th>
                                                <th> {{$post->category->name}} </th>
                                                <th> {{$post->created_at}} </th>
                                                <th>
                                                    <a href="{{route('post.edit', $post)}}">
                                                        <i class="fa fa-pencil" style="color: #29b6f6;"></i>
                                                    </a>
                                                    <form method="Post" action="{{route('post.destroy', $post)}}" style="display: inline-block">
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
                            {{$posts->links()}}
                        </div>
                    </div>

                </div>
                <!--- end row -->

            </div>

        </div> <!-- container -->

    </div> <!-- content -->

@endsection
@section('AddNewScript')

    <!-- CounterUp  -->
    <script src="{{asset('../plugins/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('../plugins/counterup/jquery.counterup.min.js')}}"></script>

    <!--Morris Chart-->
{{--    <script src="{{asset('../plugins/morris/morris.min.js')}}"></script>--}}
    <script src="{{asset('../plugins/raphael/raphael-min.js')}}"></script>

    <!-- Load page level scripts-->
    <script src="{{asset('../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('../plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('../plugins/jvectormap/gdp-data.js')}}"></script>
    <script src="{{asset('../plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>


    <!-- Dashboard Init js -->
{{--    <script src="{{asset('assets/pages/jquery.blog-dashboard.js')}}"></script>--}}
@endsection
