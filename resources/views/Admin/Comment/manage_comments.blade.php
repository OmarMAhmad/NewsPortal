@extends('Admin.Layout.Master')

@section('Title') Manage Comments @endsection

@section('Content')
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Manage Comments</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="{{url('admin')}}">Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{route('comment.index')}}">Comments </a>
                                </li>
                                <li class="active">
                                    Manage Comments
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
                                <div class="table-responsive">
                                    <table class="table m-0 table-colored-bordered table-bordered-primary">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">#</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th width="400">Comment</th>
                                                <th>Comment Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <@foreach($comments as $comment)
                                                <tr>
                                                    <th style="text-align: center" scope="row"> {{$loop->iteration}} </th>
                                                    <th> {{$comment->first_name . ' ' . $comment->last_name}} </th>
                                                    <th> {{$comment->email}} </th>
                                                    <th> {{$comment->massage}} </th>
                                                    <th> {{$comment->created_at}} </th>
                                                    <th>
                                                        <form method="Post" action="{{route('comment.destroy', $comment)}}" style="display: inline-block">
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
                                {{$comments->links()}}
                            </div>
                        </div>

                    </div>
                    <!--- end row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-box m-t-20">
                                <div class="m-b-30">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- container -->
            </div> <!-- content -->
@endsection
