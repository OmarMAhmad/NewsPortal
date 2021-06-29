@extends('Admin.Layout.Master')

@section('Title') Edit Post @endsection

@section('Content')
    <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Edit Post </h4>
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
                    <div class="col-md-10 col-md-offset-1">
                        <div class="p-6">
                            <div class="">
                                <form method="post" action="{{route('post.update', $post)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group m-b-20">
                                        <label for="exampleInputEmail1">Post Title</label>
                                        <input type="text" class="form-control" value="{{$post->title}}" name="title" placeholder="Enter title" required>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box">
                                                <div class="form-group">
                                                    <h4 class="m-b-30 m-t-0 header-title" class="col-md-2 control-label">
                                                        <b>Post Details</b>
                                                    </h4>
                                                    <textarea class="form-control" rows="5" name="details" required>{{$post->details}}</textarea>
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
                                                    <textarea class="form-control" rows="5" name="description" required>{{$post->description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group m-b-20">
                                        <label for="exampleInputEmail1">Category</label>
                                        <select class="form-control" name="category_id" id="category" onChange="getSubCat(this.value);" required>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$post->category_id == $category->id? 'selected':' '}}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card-box">
                                                <h4 class="m-b-30 m-t-0 header-title"><b>Feature Image</b></h4>
                                                <img src="{{asset($post->image)}}" width="300" alt="">
                                                <br><br>
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="update" class="btn btn-success waves-effect waves-light">
                                        Update
                                    </button>
                                </form>

                            </div>
                        </div> <!-- end p-20 -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- container -->
        </div> <!-- content -->
@endsection
