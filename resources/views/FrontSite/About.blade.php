@extends('FrontSite.Layout.Master')

@section('Title') About Page @endsection

<!-- Page Content -->
@section('Content')
    <div class="container">
        <br><br><br><br>
        <div class="row">
            <!-- Blog post -->
            @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title"> {{$post->title}} </h2>
                            <p>
                                <a href="category.php?id=" style="text-decoration: none; color: #6c757d">
                                    <b>Category : {{$post->category->name}} </b>
                                </a>
                            </p>
                            <hr/>
                            <img class="img-fluid rounded" src="{{$post->image}}" alt="{{$post->title}}">
                            <br><br>
                            <p class="card-text"> {{$post->details}}Details </p>
                        </div>
                        <div class="card-footer text-muted">
                            <b> Posted on : </b> {{$post->created_at}}
                        </div>
                    </div>
                </div>
            @endforeach
            <p style="margin-left: 15px"> {{$posts->links()}} </p>
        </div>
    </div>
@endsection
