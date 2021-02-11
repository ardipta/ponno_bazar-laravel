@extends('layouts.master')
@section('content')
    <section id="categories">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text_categories">
                    <ul>
                        <li><i class="fa fa-bars"></i></li>
                        <li>categories</li>
                        <li class="icon-right"><i class="fa fa-angle-down"></i></li>
                    </ul>
                </div>
                <div class="col-md-8 menu_categories">
                    <ul>
                        <li><a href="">Gift card</a></li>
                        <li><a href="">Campaigns</a></li>
                        <li><a href="">Voucher</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!------------slider part---------->
    <section id="menuandslider">
        <div class="container cole">
            <div class="row">
                <div class="col-md-2">
                    <div class="menu">
                        <ul class="submenu">
                            <li>
                                <a href="{{ url('bus_ticket') }}" target="none">
                                    <span class="male"><i class="fa fa-bus"></i></span>
                                    bus ticket
                                    <span class="icon-right"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="phone"><i class="fa fa-tablet"></i></span>
                                    phones &amp; tablets
                                    <span class="icon-right"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="tv"><i class="fa fa-tv"></i></span>
                                    tvs &amp; cameras
                                    <span class="icon-right"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="com"><i class="fa fa-desktop"></i></span>
                                    computing &amp; gaming
                                    <span class="icon-right"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="app"><i class="fa fa-hourglass-half"></i></span>
                                    appliance
                                    <span class="icon-right"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="home"><i class="fa fa-home"></i></span>
                                    home &amp; living
                                    <span class="icon-right"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ball"><i class="fa fa-soccer-ball-o"></i></span>
                                    sports &amp; travel
                                    <span class="icon-right"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="beauty"><i class="fa fa-paint-brush"></i></span>
                                    beauty &amp; health
                                    <span class="icon-right"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="baby"><i class="fa fa-child"></i></span>
                                    baby,kids &amp; toy
                                    <span class="icon-right"><i class="fa fa-angle-right"></i></span>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="col-md-8">

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner mid-slider" role="listbox">
                            <div class="item active">
                                <img src="image/resume_one.png" alt="...">

                            </div>
                            <div class="item">
                                <img src="image/bus.jpeg" alt="...">

                            </div>
                            <div class="item">
                                <img src="image/slider3.jpg" alt="...">

                            </div>
                            <div class="item">
                                <img src="image/slider4.jpg" alt="...">

                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <div id="carousel-example-generic" class="carousel2 slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active text-center">
                                <ul>
                                    <li>
                                        <img src="image/apple.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="image/nokia.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="image/samsung.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="image/sony.jpg" alt="">
                                    </li>
                                </ul>

                            </div>
                            <div class="item text-center">
                                <ul>
                                    <li>
                                        <img src="image/ecstasy.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="image/yellow.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="image/lereve.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="image/grameen.jpg" alt="">
                                    </li>
                                </ul>

                            </div>
                            <div class="item text-center">
                                <ul>
                                    <li>
                                        <img src="image/fossil.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="image/fastrack.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="image/bata.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="image/zaara.jpg" alt="">
                                    </li>
                                </ul>

                            </div>
                            <div class="item text-center">
                                <ul>
                                    <li>
                                        <img src="image/philips.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="image/eco.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="image/canon.png" alt="">
                                    </li>
                                    <li>
                                        <img src="image/fujifilm.jpg" alt="">
                                    </li>
                                </ul>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------service part---------->
    <section class="services">
        <div class="container">
            <div class="row wow slideInLeft">
                <div class="col-md-4">
                    <div class="icons">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="icons_text">
                        <h4>Free shipping worldwide</h4>
                        <p>Lorem Ipsum is simply dummy text <br>Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icons">
                        <i class="fa fa-microphone"></i>
                    </div>
                    <div class="icons_text">
                        <h4>24/7 customer service</h4>
                        <p>Lorem Ipsum is simply dummy text <br>Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icons">
                        <i class="fa fa-handshake-o"></i>
                    </div>
                    <div class="icons_text">
                        <h4>money back guarantee</h4>
                        <p>Lorem Ipsum is simply dummy text <br>Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------service part---------->
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pro_text">
                        <h1>our products</h1>

                    </div>


                </div>
            </div>
        </div>
    </section>
    <!------------
                    Women's  part
                                    ---------->
    <section class="womens">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="women_img">
                        <a href="women.php" target="none">
                            <img src="image/women.png" class="wow fadeInLeft" alt="">
                            <h1 class="wow fadeInUpBig">#Women</h1>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div id="men_product">
                        <!--                    --><?php
                        //                    getpro1();
                        //                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="vc_row wow slideInLeft">
                        <a href="">
                            <img src="image/ads1.jpg" alt="">
                            <div class="content_text" style="color: #ffffff;">
                                <p>
                                    <span class="discount">10%</span> off your <br>next purchase
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vc_row wow slideInRight">
                        <a href="">
                            <img src="image/ads2.jpg" alt="">
                            <div class="content_text">
                                <div class="title">
                                    free shipping
                                </div>
                                <div class="title_free">free shipping on domestic orders only</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------
                    men's  part
                                    ---------->
    <section class="mens">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="men_product">
                        <!--                    --><?php
                        //                    getpro();
                        //                    ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="men_img">
                        <a href="men.php" target="none">
                            <img src="image/men.png" class="wow fadeInRight" alt="">
                            <h1 class="wow fadeInUp">#Men</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Available On -->
    <section class="available-on">

        <div class="container wow bounceInRight" data-wow-duration="1s">

            <div class="row">

                <div class="col-md-6">

                    <div class="available-title">
                        <h2>Available On </h2>

                        <p>Our app available on android, ios, and windows mobile device. Please download and enjoy smart shopping. </p>

                    </div>

                </div>
                <div class="col-md-6">

                    <div class="row">

                        <a href="#">

                            <div class="col-md-4 no-padding">
                                <div class="available-on-item">

                                    <i class="fa fa-apple"></i>
                                    <div class="available-on-inner">

                                        <h2> iOS</h2>

                                    </div>

                                </div>

                            </div>


                        </a>



                        <a href="#">

                            <div class="col-md-4 no-padding">
                                <div class="available-on-item">

                                    <i class="fa fa-android"></i>
                                    <div class="available-on-inner">

                                        <h2> ANDROID</h2>

                                    </div>

                                </div>

                            </div>


                        </a>

                        <a href="#">

                            <div class="col-md-4 no-padding">
                                <div class="available-on-item">

                                    <i class="fa fa-windows"></i>
                                    <div class="available-on-inner">

                                        <h2> WINDOWS</h2>

                                    </div>

                                </div>

                            </div>


                        </a>



                    </div>


                </div>



            </div>
        </div>

    </section>
    <!-- Contact Us -->
    <section class="contact-us" id="CONTACT">
        <div class="container wow bounceIn">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="section-title">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-us-form wow bounceIn">
            <div class="container">
                <form action="index.php" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" id="message" rows="25" cols="10" name="message" placeholder="Message Text...."></textarea>
                            <button type="submit" class="btn btn-default submit-btn form_submit" name="send">SEND</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-12 wow bounceInLeft">

                    <div class="social-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/" target="none"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="none"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/" target="none"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
