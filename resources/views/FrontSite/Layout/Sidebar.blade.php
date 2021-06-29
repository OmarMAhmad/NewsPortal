<!-- Sidebar Widgets Column -->
<div class="col-md-4">
    <!-- Search Widget -->
    <div class="card mb-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <form name="search" action="{{url('search')}}" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search for..." required>
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" name="Go" type="submit"> Go! </button>
                    </span>
                </div>
            </form>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <ul style="list-style-type: circle; margin-left: 20px" class="list-unstyled mb-0">
                        @foreach($categories as $category)
                            <li>
                                <a href="{{url('category', $category)}}" style="text-decoration: none; color: #6c757d">
                                    {{$category->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>


