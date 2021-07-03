<header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
        <h4 class="text-center" style="font-weight: bold; color: white">Ponnobazar</h4>
    </div>

    <div class="cd-search js-cd-search">
        <form>
            <input class="reset" type="search" placeholder="Search...">
        </form>
    </div>

    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>

    <ul class="cd-nav__list js-cd-nav__list">
{{--        <li class="cd-nav__item"><a href="#0">Tour</a></li>--}}
{{--        <li class="cd-nav__item"><a href="#0">Support</a></li>--}}
        <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
            <a href="#0">
                <i class="fa fa-user" style="padding-right: 5px"></i>
                <span>Account</span>
            </a>

            <ul class="cd-nav__sub-list">
                <li class="cd-nav__sub-item"><a href="{{route('user_profile')}}">Edit Profile</a></li>
                <li class="cd-nav__sub-item">
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
                            <a>Logout</a>
                        </button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</header> <!-- .cd-main-header -->
