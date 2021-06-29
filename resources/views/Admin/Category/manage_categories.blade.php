@extends('Admin.Layout.Master')

@section('Title') Manage Categories @endsection

@section('Content')
    <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Manage Categories</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="{{url('admin')}}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{route('category.index')}}">Category </a>
                                </li>
                                <li class="active">
                                    Manage Categories
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
                                    <a href="{{route('category.create')}}">
                                        <button id="addToTable" class="btn btn-success waves-effect waves-light">
                                            Add <i class="mdi mdi-plus-circle-outline"></i>
                                        </button>
                                    </a>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-colored-bordered table-bordered-primary m-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <th scope="row"> {{$loop->iteration}} </th>
                                                    <th> {{$category->name}} </th>
                                                    <th> {{$category->created_at}} </th>
                                                    <th>
                                                        <a href="{{route('category.edit', $category)}}">
                                                            <i class="fa fa-pencil" style="color: #29b6f6;"></i>
                                                        </a>
                                                        &nbsp
                                                        <form method="Post" action="{{route('category.destroy', $category)}}" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" style="background-color: transparent; border: none" onclick="return confirm('Do You Reaaly Want To Deleted ?!')"> {{--  " --}}
                                                                <i class="fa fa-trash-o" style="color: #f05050"></i>
                                                            </button>
                                                        </form>
                                                    </th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{$categories->links()}}
                            </div>
                        </div>
                    </div>
                    <!--- end row -->

                </div>
                <!-- container -->

            </div> <!-- content -->
@endsection
