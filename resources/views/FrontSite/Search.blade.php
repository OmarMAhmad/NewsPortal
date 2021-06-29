@extends('FrontSite.Layout.Master')

@section('Title') Home Page @endsection

@section('Content')

    <div class="container">
        <br>
        <h1 class="mt-4 mb-3" style="text-align: center"> Post on Your Search <b style="color: #6c757d">" {{$words}} "</b></h1>
        <br>
        <div class="row" style="margin-top: 4%">
            <!-- Blog Entries Column -->

            @if(isset($posts->first()->id))
                @foreach($posts as $post)
                    <!-- Blog post -->
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <img class="card-img-top" src="{{$post->image}}" alt="{{$post->title}}">
                            <div class="card-body">
                                <h2 class="card-title"> {{$post->title}} </h2>
                                <p>
                                    <a href="category.php?id="></a>
                                </p>
                                <a href="{{url('details', $post->id)}}" class="btn btn-primary">Read More &rarr;</a>
                            </div>
                            <div class="card-footer text-muted">
                                <b>Posted on : </b> <i> {{$post->created_at}} </i>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3 class="col-sm-11" style="color:red; margin: 50px; text-align: center"> No Record Found </h3>
            @endif
        </div>
    </div>
@endsection
