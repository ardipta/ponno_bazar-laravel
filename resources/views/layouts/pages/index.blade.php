@extends('layouts.pages.master')
@section('content')
    <div class="container">
        <div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="col">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{asset('images/inside_bus.webp')}}" class="img-thumbnail" style="height: 180px; max-width: 100%">
                                </div>
                                <div class="item">
                                    <img src="{{asset('images/inside_bus2.webp')}}" class="img-thumbnail" style="height: 180px; max-width: 100%">
                                </div>
                                <div class="item">
                                    <img src="{{asset('images/inside_bus3.webp')}}" class="img-thumbnail" style="height: 180px; max-width: 100%">
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
{{--                        <img src="{{asset('images/inside_bus.webp')}}" class="img-thumbnail" style="height: 180px; max-width: 100%; border-radius: 5px; padding: 5px; margin-bottom: 5px">--}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-xs-4">
                        <img src="{{asset('images/inside_bus.webp')}}" class="img-thumbnail" style="height: 80px; max-width: 100%; padding: 5px; border-radius: 5px">
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <img src="{{asset('images/inside_bus2.webp')}}" class="img-thumbnail" style="height: 80px; max-width: 100%; padding: 5px; border-radius: 5px">
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <img src="{{asset('images/inside_bus3.webp')}}" class="img-thumbnail" style="height: 80px; max-width: 100%; padding: 5px; border-radius: 5px">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
            <h2>Buy Ticket Now!!</h2>
            <div class="ban-top">
                <div class="bnr-left">
                    <label class="inputLabel">From</label>
                    <input class="city" type="text" value="Enter a city" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required=>
                </div>
                <div class="bnr-left">
                    <label class="inputLabel">To</label>
                    <input class="city" type="text" value="Enter a city" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required=>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="ban-bottom">
                <div class="bnr-right">
                    <label class="inputLabel">Date of Journey</label>
                    <input class="date" id="datepicker" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=>
                </div>
                <div class="bnr-right">
                    <label class="inputLabel">Date of Return<span class="opt">&nbsp;(Optional)</span></label>
                    <input class="date" id="datepicker1" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=>
                </div>
                <div class="clearfix"></div>
                <!---start-date-piker---->
                <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" />
                <script src="{{asset('js/jquery-ui.js')}}"></script>
                <script>
                    $(function() {
                        $( "#datepicker,#datepicker1" ).datepicker();
                    });
                </script>
                <!---/End-date-piker---->
            </div>
            <div class="sear">
                <form action="bus.html">
                    <button class="seabtn">Search Buses</button>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--- /banner ---->
    <!--- rupes ---->
    <div class="container">
        <div class="rupes">
            <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <div class="rup-left">
                    <a href="offers.html"><i class="fa fa-usd"></i></a>
                </div>
                <div class="rup-rgt">
                    <h3>UP TO USD. 50 OFF</h3>
                    <h4><a href="offers.html">TRAVEL SMART</a></h4>
                    <p>CODE:YBMAR12<br>Book Using Pay Money</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <div class="rup-left">
                    <a href="offers.html"><i class="fa fa-h-square"></i></a>
                </div>
                <div class="rup-rgt">
                    <h3>UP TO 70% OFF</h3>
                    <h4><a href="offers.html">ON HOTELS ACROSS WORLD</a></h4>
                    <p>Offer CODE:YBMAR12</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <div class="rup-left">
                    <a href="offers.html"><i class="fa fa-mobile"></i></a>
                </div>
                <div class="rup-rgt">
                    <h3>FLAT USD. 50 OFF</h3>
                    <h4><a href="offers.html">BUS APP OFFER</a></h4>
                    <p>book via the yellow Bus App<br>CODE:YBMAR12</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--- /rupes ---->
    <!---holiday---->
    <div class="container">
        <div class="holiday">
            <div class="col-md-3 holiday-left animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
                <img src="images/4.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 holiday-mid animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
                <h3>Travel Holiday Packages</h3>
                <p>Private Guide and Driver in any language and in any departure date. For more information please contact us....</p>
            </div>
            <div class="col-md-3 holiday-left animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
                <img src="images/5.jpg" class="img-responsive" alt="">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!---/holiday---->
    <!---track---->
    <div class="container">
        <div class="track">
            <div class="col-md-6 track-right wow fadeInLeft animated" data-wow-delay=".5s">
                <a href="track.html"><img src="images/map1.png" class="img-responsive" alt=""></a>
            </div>
            <div class="col-md-6 track-left wow fadeInRight animated" data-wow-delay=".5s">
                <h3>TRACK MY BUS</h3>
                <p>First of its own kind,bus tracking feature on bus</p>
                <a href="track.html" class="learn">Learn More</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--- /track ---->
    <!--- routes ---->
    <div class="routes">
        <div class="container">
            <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
                <div class="rou-left">
                    <a href="#"><i class="fa fa-truck"></i></a>
                </div>
                <div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
                    <h3>80000</h3>
                    <p>ROUTES</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 routes-left">
                <div class="rou-left">
                    <a href="#"><i class="fa fa-user"></i></a>
                </div>
                <div class="rou-rgt">
                    <h3>1900</h3>
                    <p>BUS OPERATORS</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
                <div class="rou-left">
                    <a href="#"><i class="fa fa-ticket"></i></a>
                </div>
                <div class="rou-rgt">
                    <h3>7,00,00,000+</h3>
                    <p>TICKETS SOLD</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--- /routes ---->

    <!-- sign -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">
                            <div class="login">
                                <div class="login-left">
                                    <ul>
                                        <li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
                                        <li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
                                        <li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
                                    </ul>
                                </div>
                                <div class="login-right">
                                    <form>
                                        <h3>Create your account </h3>
                                        <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                        <input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
                                        <input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">
                                        <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                        <input type="submit" value="CREATE ACCOUNT">
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //sign -->
    <!-- signin -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-left">
                                <ul>
                                    <li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
                                    <li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
                                    <li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
                                </ul>
                            </div>
                            <div class="login-right">
                                <form>
                                    <h3>Signin with your account </h3>
                                    <input type="text" value="Enter your mobile number or Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                    <h4><a href="#">Forgot password</a></h4>
                                    <div class="single-bottom">
                                        <input type="checkbox" id="brand" value="">
                                        <label for="brand"><span></span>Remember Me.</label>
                                    </div>
                                    <input type="submit" value="SIGNIN">
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //signin -->
    <!-- write us -->
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body modal-spa">
                        <div class="writ">
                            <h4>HOW CAN WE HELP YOU</h4>
                            <ul>
                                <li class="na-me">
                                    <input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                </li>
                                <li class="na-me">
                                    <input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                </li>
                                <li class="na-me">
                                    <input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
                                </li>
                                <li class="na-me">
                                    <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                                        <option value="null">Select Issue</option>
                                        <option value="null">Booking Issues</option>
                                        <option value="null">Bus Cancellation</option>
                                        <option value="null">Refund</option>
                                        <option value="null">Wallet</option>
                                    </select>
                                </li>
                                <li class="na-me">
                                    <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                                        <option value="null">Select Issue</option>
                                        <option value="null">Booking Issues</option>
                                        <option value="null">Bus Cancellation</option>
                                        <option value="null">Refund</option>
                                        <option value="null">Wallet</option>
                                    </select>
                                </li>
                                <li class="descrip">
                                    <input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write Description';}" required="">
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                            <div class="sub-bn">
                                <form>
                                    <button class="subbtn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //write us -->
@endsection
