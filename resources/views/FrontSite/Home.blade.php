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
                @foreach($posts as $post)
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{asset($post->image)}}" alt="#">
                        <div class="card-body">
                            <h2 class="card-title"> {{$post->title}} </h2>
                            <p>
                                <b>Category : </b>
                                <a href="{{route('category.show', $post->category->id)}}" style="text-decoration: none; color: #6c757d"> {{$post->category->name}} </a>
                            </p>
                            <a href="{{url('details', $post)}}" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            <b>Posted on : </b> <i> {{$post->created_at}} </i>
                        </div>
                    </div>
                @endforeach
{{--                {{$posts->links()}}--}}
            </div>
            @include('FrontSite.Layout.Sidebar')
        </div>
    </div>
@endsection
