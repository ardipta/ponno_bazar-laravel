<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header d-flex flex-column align-items-center text-center" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="{{route('index')}}">
                <!-- Logo icon -->
                <b class="logo-icon" style="height: 180px; margin-top: 15px">
                    <img src="{{asset('images/logo1.webp')}}" style="max-width: 100%; height: 100%">
                </b>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
               href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav d-none d-md-block d-lg-none">
                <li class="nav-item">
                    <a class="nav-toggler nav-link waves-effect waves-light text-white"
                       href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ml-auto d-flex align-items-center">

                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class=" in">
                    <form role="search" class="app-search d-none d-md-block mr-10">
                        <input type="text" placeholder="Search..." class="form-control mt-0">
                        <a href="" class="active">
                            <i class="fa fa-search"></i>
                        </a>
                    </form>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li>
                    <a class="profile-pic dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user"></i><span class="text-white font-medium">
                            {{$users->first_name.$users->last_name}}
                        </span>
                    </a>
                    <form style="line-height: 0; min-height: 15px;" class="profile-pic dropdown-toggle" action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" style="background: none!important;
                                  border: none;
                                  padding: 0!important;
                                  text-decoration: none;
                                  /*optional*/
                                  font-family: arial, sans-serif;
                                  /*input has OS specific font-family*/
                                  color: #FFFFFF;
                                  font-weight: bold;
                                  cursor: pointer;">
                            Logout
                        </button>
                    </form>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
