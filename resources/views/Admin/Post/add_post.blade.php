@extends('Admin.Layout.Master')

@section('Title') Add Post @endsection

@section('Content')

<!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add Post </h4>
                        <ol class="breadcrumb p-0 m-0">
                            <li>
                                <a href="{{url('admin')}}">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{route('post.index')}}"> Posts </a>
                            </li>
                            <li class="active">
                                Add Post
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
                            <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group m-b-20">
                                    <label for="exampleInputEmail1">Post Title</label>
                                    <input type="text" class="form-control" id="posttitle" name="title" placeholder="Enter title">
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">
                                            <div class="form-group">
                                                <h4 class="m-b-30 m-t-0 header-title" class="col-md-2 control-label">
                                                    <b>Post Details</b>
                                                </h4>
                                                <textarea class="form-control" rows="5" name="details" placeholder="Enter Details"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">
                                            <div class="form-group">
                                                <h4 class="m-b-30 m-t-0 header-title" class="col-md-2 control-label">
                                                    <b>Post Description</b>
                                                </h4>
                                                <textarea class="form-control" rows="5" name="description" placeholder="Enter Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <label for="exampleInputEmail1">Category</label>
                                    <select class="form-control" name="category_id" onChange="getSubCat(this.value);">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"> {{$category->name}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box">
                                            <h4 class="m-b-30 m-t-0 header-title">
                                                <b>Feature Image</b>
                                            </h4>
                                            <input type="file" name="image" value="Image" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="submit"
                                        class="btn btn-success waves-effect waves-light">
                                    Save and Post
                                </button>
                                <button type="reset" class="btn btn-danger waves-effect waves-light">
                                    Clear
                                </button>
                            </form>

                        </div>
                    </div> <!-- end p-20 -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- content -->

@endsection
