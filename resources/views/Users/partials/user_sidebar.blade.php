<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html"
                       aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.html"
                       aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu"> {{auth()->user()->first_name." ".auth()->user()->last_name}}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                       aria-expanded="false">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span class="hide-menu">{{auth()->user()->phone}}</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.html"
                       aria-expanded="false">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span class="hide-menu">{{auth()->user()->date_of_birth}}</span>
                    </a>
                </li>

                <li class="sidebar-item p-20">
                    <a class="waves-effect waves-dark btn" style="background-color: #2f323e" href="{{route('user_profile')}}"
                       aria-expanded="false">
                        <i class="fa fa-user-circle" style="color: white" aria-hidden="true"></i>
                        <span class="hide-menu" style="color: white"> User Profile</span>
                    </a>
                </li>
                <li class="text-center p-20 upgrade-btn">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" href="" class="btn btn-block btn-danger text-white">
                            Sign out
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
