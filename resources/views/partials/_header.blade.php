<!-- header -->
<div class="agileits_header">
    <div class="w3l_offers">
        <a href="">Today's special Offers !</a>
    </div>
    <div class="w3l_search">
        <form action="#" method="post">
            <input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
            <input type="submit" value=" ">
        </form>
    </div>
    <div class="product_list_header">
        <form action="#" method="post" class="last">
            <fieldset>
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="display" value="1" />
                <input type="submit" name="submit" value="View your cart" class="button" />
            </fieldset>
        </form>
    </div>
    <div class="w3l_header_right">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">
                            @auth
                                @if(auth()->user()->is_admin === 1)
                                    <li><a href=""><i class="fa fa-user"></i> Logged as {{auth()->user()->first_name." ".auth()->user()->last_name}}</a></li>
                                    <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                @else
                                    <li><a href=""><i class="fa fa-user"></i> Logged as {{auth()->user()->first_name." ".auth()->user()->last_name}}</a></li>
                                    <li><a href="{{route('users.dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                @endif
                                <li style="margin-top: 5px">
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button type="submit" href="" class="btn btn-block btn-danger text-white">
                                            <i class="fa fa-sign-out"></i> Logout
                                        </button>
                                    </form>
                                </li>
                            @endauth
                            @guest
                                <li><a href="{{route('login')}}"><i class="fa fa-sign-in"></i> Login</a></li>
                                <li><a href="{{route('register')}}"><i class="fa fa-user-md"></i> Sign Up</a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="w3l_header_right1">
        <h2><a href="mail.html">Contact Us</a></h2>
    </div>
    <div class="clearfix"> </div>
</div>

<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <a href="{{route('index')}}" style="text-decoration: blink"><img src="{{asset('images/logo.png')}}" style="max-width: 100%" alt="Responsive image"></a>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="special_items">
                @if (\Illuminate\Support\Facades\Route::is('index'))
                    <li><a href="{{route('index')}}" style="font-weight: bold; color: #84C639">Home</a><i>/</i></li>
                @else
                    <li><a href="{{route('index')}}">Home</a><i>/</i></li>
                @endif

                @if (\Illuminate\Support\Facades\Route::is('bus_ticket'))
                    <li><a href="{{route('index')}}" style="font-weight: bold; color: #84C639">Bus Tickets</a><i>/</i></li>
                @else
                    <li><a href="{{route('bus_ticket')}}" class="bus_ticket">Bus Tickets</a><i>/</i></li>
                @endif
                <li><a href="about.html">About Us</a><i>/</i></li>
                <li><a href="services.html">Services</a></li>
            </ul>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">info@ponnobazar.online</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
