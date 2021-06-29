@extends('FrontSite.Layout.Master')

@section('Title') Home Page @endsection

@section('Content')
    <!-- Page Content -->
    <div class="container">
        <br>
        <div class="row" style="margin-top: 4%">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <!-- Blog post -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title"> {{$post->title}} </h2>
                        <p>
                            <a href="category.php?id=" style="text-decoration: none; color: #6c757d">
                                <b>Category : {{$post->category->name}} </b>
                            </a>
                        </p>
                        <hr/>
                        <img class="img-fluid rounded" src="{{asset($post->image)}}" alt="#">
                        <br><br>
                        <p class="card-text"> {{$post->description}} </p>
                    </div>
                    <div class="card-footer text-muted">
                        <b> Posted on : </b>{{$post->created_at}}
                    </div>
                </div>
            </div>
            @include('FrontSite.Layout.Sidebar')
        </div>
    </div>
@endsection
