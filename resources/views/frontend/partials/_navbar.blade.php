<!--- navbar ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <div class="navigation">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-1">
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="#">About</a></li>
{{--                            <li><a href="#">Travels</a></li>--}}
{{--                            <li><a href="#">Privacy Policy</a></li>--}}
{{--                            <li><a href="#">Terms of Use</a></li>--}}
                            <li><a href="{{route('contact')}}">Contact Us</a></li>
                            <li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>
                            @auth
                                <li><a style="text-decoration: none" href="{{route('users.dashboard')}}"><i class="fa fa-user-md"></i> Logged as {{auth()->user()->first_name." ".auth()->user()->last_name}}</a></li>
                                <li><a style="text-decoration: none" href="{{route('users.dashboard')}}"><i class="fa fa-dashboard"></i> User Dashboard</a></li>
                                <li>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button type="submit" style="background: none!important;
                                          border: none;
                                          padding: 0!important;
                                          text-decoration: none;
                                          margin-top: 6px;
                                          cursor: pointer;">
                                            <i class="fa fa-sign-out"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            @endauth
                            @guest
                                <li><a style="text-decoration: none" href="#" data-toggle="modal" data-target="#loginModal" ><i class="fa fa-user-md"></i> Login</a></li>
                            @endguest
                            <div class="clearfix"></div>
                        </ul>
                    </nav>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<!--- /navbar ---->
