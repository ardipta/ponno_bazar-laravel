<!-- top-header -->
<div class="top-header">
    <div class="container">
        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            <li class="hm"><a href="#"><i class="fa fa-home"></i></a></li>
            <li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li>
        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            <li class="tol">Toll Number : 123-4568790</li>
            @auth
                @if(auth()->user()->is_admin === 0)
                    <li class="sigi"><a style="text-decoration: none" href="{{route('users.dashboard')}}"><i class="fa fa-user-md"></i> Logged as {{auth()->user()->first_name." ".auth()->user()->last_name}}</a></li>
                    <li class="sigi"><a style="text-decoration: none" href="{{route('users.dashboard')}}" > | User Dashboard</a></li>
                    <li class="sigi">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" style="background: none!important;
                              border: none;
                              padding: 0!important;
                              text-decoration: none;
                              /*optional*/
                              font-family: arial, sans-serif;
                              /*input has OS specific font-family*/
                              color: #FFFFFF;
                              cursor: pointer;">
                                | Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li class="sigi"><a style="text-decoration: none" href="#"><i class="fa fa-user-md"></i> Logged as {{auth()->user()->first_name." ".auth()->user()->last_name}}</a></li>
                    <li class="sigi"><a style="text-decoration: none" href="{{route('dashboard')}}" > | Admin Dashboard</a></li>
                    <li class="sigi">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" style="background: none!important;
                              border: none;
                              padding: 0!important;
                              text-decoration: none;
                              /*optional*/
                              font-family: arial, sans-serif;
                              /*input has OS specific font-family*/
                              color: #FFFFFF;
                              cursor: pointer;">
                                | Logout
                            </button>
                        </form>
                    </li>
                @endif
            @endauth
            @guest
                <li class="sigi"><a style="text-decoration: none" href="#" data-toggle="modal" data-target="#loginModal" ><i class="fa fa-user-md"></i> Login</a></li>
            @endguest
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /top-header ---->
