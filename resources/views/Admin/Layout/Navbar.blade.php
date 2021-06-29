<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="{{url('admin')}}" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                @if(Auth::User()->email == 'om.ahmad@std.alaqsa.edu.ps')
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect">
                            <i class="fa fa-user-plus widget-one-icon"></i>
                            <span> Admin </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('user.create')}}"> Add Admin </a></li>
                            <li><a href="{{route('user.index')}}"> Manage Admin </a></li>
                        </ul>
                    </li>
                @endif
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span> Category </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('category.create')}}"> Add Category </a></li>
                        <li><a href="{{route('category.index')}}"> Manage Category </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="fa fa-newspaper-o"></i>
                        <span> Posts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('post.create')}}"> Add Posts </a></li>
                        <li><a href="{{route('post.index')}}"> Manage Posts </a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="fa fa-comment-o"></i>
                        <span> Comments </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('comment.index')}}">Manage Comments</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

        <div class="help-box">
            <h5 class="text-muted m-t-0">For Help ?</h5>
            <p class=""><span class="text-custom">Email:</span> <br/>om.ahmad@std.alaqsa.edu.ps</p>
        </div>

    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
<div class="content-page">
