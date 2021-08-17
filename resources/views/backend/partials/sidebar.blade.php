<div class="sidebar-wrapper active">
    <div class="sidebar-header d-flex flex-column align-items-center text-center">
        <a href="{{route('admin.dashboard')}}"><img src="{{asset('images/logo1.webp')}}" style="max-width: 100%; height: 145px"></a>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class='sidebar-title'><a href="{{route('admin.dashboard')}}"><i class="fa fa-bookmark"></i> Dashboard</a></li>
            <li class='sidebar-title'><a href="{{route('add_bus_service')}}"><i class="fa fa-plus-square"></i> Add Bus Service</a></li>
            <li class='sidebar-title'><a href="#"><i class="fa fa-user-md"></i> User Details</a></li>
            <li class='sidebar-title'><a href="#"><i class="fa fa-user-md"></i> Ticket Purchase Details</a></li>
{{--            <li class="sidebar-item">--}}
{{--                <a href="#" class='sidebar-link'>--}}
{{--                    <i class="fa fa-user-md"></i>--}}
{{--                    <span>Manage Users</span>--}}
{{--                </a>--}}
{{--                <ul class="submenu">--}}
{{--                    <li class="submenu-item">--}}
{{--                        <a href="#">User Details</a>--}}
{{--                    </li>--}}
{{--                    <li class="submenu-item">--}}
{{--                        <a href="#">All Purchases</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </li>--}}
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
