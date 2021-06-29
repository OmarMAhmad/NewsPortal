@extends('Admin.Layout.Master')

@section('Title') Edit Category @endsection

@section('Content')
    <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Edit Category</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="{{url('admin')}}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{route('category.index')}}">Category </a>
                                </li>
                                <li class="active">
                                    Edit Category
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
                            <h4 class="m-t-0 header-title"><b>Edit Category </b></h4>
                            <hr/>

                            <div class="col-md-3">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{route('category.update', $category)}}" method="post" class="form-horizontal">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Category</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" value="{{$category->name}}" name="name" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">&nbsp;</label>
                                            <div class="col-md-10">
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Update
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
