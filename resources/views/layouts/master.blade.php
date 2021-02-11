<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ponno Bazar</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto|Work+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
<!------------header part---------->
<header id="HOME">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header_info">
                        <ul>
                            <li><i class="fa fa-phone fa-rotate-vertical"></i><a href="#" target="none">09638111666</a></li>
                            <li><i class="fa fa-envelope"></i><a href="#" target="none">support@ponnobazar.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="#search">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="logo">
                    <a href="index.php"><img src="image/ponno-bazar-logo.png" class="img-responsive" alt=""></a>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1"style="margin-top:20px;">
                <form action="results.php" method="get" enctype="multipart/form-data">
                    <div class="form">
                        <input type="text" name="user_search" class="input" placeholder="Search any products, brands and categories">
                        <button type="submit" name="search" class="search">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2 info col-md-offset-1">
                <ul>
{{--                    <li>--}}
{{--                        <a href="cart.php" class="cartimg">--}}
{{--                                <span class="shadow">--}}
{{--                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1.23em" width="1.23em" xmlns="http://www.w3.org/2000/svg"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>--}}
{{--                                </span>--}}
{{--                            <span class="cart_item">--}}
{{--<!--                                --><?php //total_items(); ?>--}}
{{--                            </span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li>
                        <a href="">
                                <span class="shadow">
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1.23em" width="1.23em" xmlns="http://www.w3.org/2000/svg"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </span>
                        </a>
                        <div class="logmenu">
                            <h4 class="px-4 py-2 mb-2 font-semibold leading-7 text-gray-800 bg-gray-200">Login</h4>
                            <!-- <form>
                                <div class="px-4 py-2">
                                    <label class="block">
                                        <span class="text-gray-700">Phone Number</span>
                                        <input name="phone" class="block w-full mt-1 form-input" placeholder="01*********" pattern="\d*" maxlength="11" title="Phone number should be 11 digit number" value="">
                                    </label>
                                </div>
                                <div class="px-4 py-2">
                                    <label class="block">
                                        <span class="text-gray-700">Password</span>
                                        <input name="password" type="password" class="block w-full mt-1 form-input" placeholder="*********" value=""></label>
                                    </div>
                                    <div class="px-4 text-center">
                                        <button style="width: 100%;" type="submit" class="logbtn">LOGIN</button>
                                        <p>Don't have an account?
                                            <span class="text-red">
                                                <a href="/auth/signup">Sign up</a>
                                            </span>
                                        </p>
                                        <p class="text-red"><a href="/auth/forgot-password">Forgot Password</a></p>
                                    </div>
                                </div>
                            </form>     -->
                            <div class="SideBar__NavDrawer-lj7sns-2 kjEILi nav-drawer">
                                <div class="flex p-6 border-b">
                                    <div class="mr-3">
                                        <img src="image/boss.png" alt="Avatar" class="SideBar___StyledImg-lj7sns-3 Ghqzy align-middle rounded-full"></div>
                                    <div class="flex-1">
                                        <h3 class="mb-1 font-semibold text-gray-800">R I</h3>
                                        <h5 class="mb-0 text-xs text-gray-700">01686121793</h5>
                                        <div class="mb-1">
                                            <div class="">
                                                <div class="flex items-center justify-between text-red-700">
                                                    <h5 class="mb-0 text-sm font-semibold text-gray-700">
                                                        <a class="text-blue-600 hover:underline" href="/user/profile?tab=transaction">My Account</a>
                                                    </h5>
                                                    <div class="flex items-center justify-between">
                                                        <strong class="">৳. 0.00</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                            <a class="text-sm font-semibold text-blue-600 hover:underline" href="/user/profile">Manage your profile</a>
                                        </div>
                                    </div>
                                </div>
                                <nav class="SideBar__SideNav-lj7sns-1 gMwyEl my-2">
                                    <a href="/order/my-orders">
                                        <div class="SideBarItem__NavItem-sc-9oz16j-0 faHCvw flex items-center justify-between text-gray-900">
                                                    <span>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 00-.5.5v9a.5.5 0 00.5.5h13a.5.5 0 00.5-.5v-9a.5.5 0 00-.5-.5zm-13-1A1.5 1.5 0 000 3.5v9A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0014.5 2h-13z" clip-rule="evenodd"></path>
                                                            <path fill-rule="evenodd" d="M7 5.5a.5.5 0 01.5-.5h5a.5.5 0 010 1h-5a.5.5 0 01-.5-.5zm-1.496-.854a.5.5 0 010 .708l-1.5 1.5a.5.5 0 01-.708 0l-.5-.5a.5.5 0 11.708-.708l.146.147 1.146-1.147a.5.5 0 01.708 0zM7 9.5a.5.5 0 01.5-.5h5a.5.5 0 010 1h-5a.5.5 0 01-.5-.5zm-1.496-.854a.5.5 0 010 .708l-1.5 1.5a.5.5 0 01-.708 0l-.5-.5a.5.5 0 01.708-.708l.146.147 1.146-1.147a.5.5 0 01.708 0z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
                                            <span class="w-full pl-4">Orders</span>
                                            <span>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                                        </svg>
                                                    </span>
                                        </div>
                                    </a>
                                    <a href="/gift-card?type=gift-cards">
                                        <div class="SideBarItem__NavItem-sc-9oz16j-0 faHCvw flex items-center justify-between text-gray-900">
                                                        <span>
                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M20 6h-2.18c.11-.31.18-.65.18-1 0-1.66-1.34-3-3-3-1.05 0-1.96.54-2.5 1.35l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm11 15H4v-2h16v2zm0-5H4V8h5.08L7 10.83 8.62 12 11 8.76l1-1.36 1 1.36L15.38 12 17 10.83 14.92 8H20v6z"></path>
                                                            </svg>
                                                        </span>
                                            <span class="w-full pl-4">Giftcard</span>
                                            <span>
                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                                            </svg>
                                                        </span>
                                        </div>
                                    </a>
                                    <a href="/campaign" rel="noreferrer">
                                        <div class="SideBarItem__NavItem-sc-9oz16j-0 faHCvw flex items-center justify-between text-gray-900">
                                                    <span>
                                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line>
                                                            <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                                            <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                                                        </svg>
                                                    </span>
                                            <span class="w-full pl-4">Campaigns</span>
                                            <span>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                                        </svg>
                                                    </span>
                                        </div>
                                    </a>
                                    <a href="/vouchers">
                                        <div class="SideBarItem__NavItem-sc-9oz16j-0 faHCvw flex items-center justify-between text-gray-900">
                                                    <span>
                                                        <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path>
                                                        </svg>
                                                    </span>
                                            <span class="w-full pl-4">Vouchers</span>
                                            <span>
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"></path>
                                                        </svg>
                                                    </span>
                                        </div>
                                    </a>
                                    <div class="SideBarItem__NavItem-sc-9oz16j-0 faHCvw flex items-center justify-between text-gray-900">
                                                <span>
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M192 277.4h189.7l-43.6 44.7L368 352l96-96-96-96-31 29.9 44.7 44.7H192v42.8z"></path>
                                                        <path d="M255.7 421.3c-44.1 0-85.5-17.2-116.7-48.4-31.2-31.2-48.3-72.7-48.3-116.9 0-44.1 17.2-85.7 48.3-116.9 31.2-31.2 72.6-48.4 116.7-48.4 44 0 85.3 17.1 116.5 48.2l30.3-30.3c-8.5-8.4-17.8-16.2-27.7-23.2C339.7 61 298.6 48 255.7 48 141.2 48 48 141.3 48 256s93.2 208 207.7 208c42.9 0 84-13 119-37.5 10-7 19.2-14.7 27.7-23.2l-30.2-30.2c-31.1 31.1-72.5 48.2-116.5 48.2zM448.004 256.847l-.849-.848.849-.849.848.849z"></path>
                                                    </svg>
                                                </span>
                                        <span class="w-full pl-4">Logout</span>
                                        <span></span>
                                    </div>
                                </nav>

                            </div>
                        </div>
                </li>
            </ul>
        </div>
    </div>
    </div>
</section>

@yield('content')

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="copyright">
                    <p>Copyright &copy; 2020 <a href="#"> - Rakibul Islam &amp; Md. Ashiqur Rahaman</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="scroll-top">
                    <a href="#HOME" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- js -->
<script src="{{ asset('js/jquery.js') }}"></script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Bx Slider JS -->
<!-- Add wow js lib -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
