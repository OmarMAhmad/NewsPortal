@extends('FrontSite.Layout.Master')

@section('Title') Category Page @endsection

@section('Content')
    <div class="container">
        <br>
        <div class="row" style="margin-top: 4%">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <!-- Blog post -->
                <h1> {{$posts->first()->category->name}} </h1>
                <br>
                @foreach($posts as $post)
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{asset($post->image)}}" alt="{{$post->title}}">
                        <div class="card-body">
                            <h2 class="card-title">{{$post->title}}</h2>
                            <a href="news-details.php?nid=22" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            <b>Posted on : </b>Date
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Sidebar Widgets Column -->
            @include('FrontSite.Layout.Sidebar')
        </div>
    </div>
@endsection
