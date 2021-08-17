<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ponnobazar</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Custom Theme files -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="shortcut icon" href="{{asset('images/logo1.webp')}}" type="image/x-icon">
    <!--animate-->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/product_listing.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/breadcumbs.css')}}" rel="stylesheet" type="text/css" media="all">
    <script src="{{asset('js/wow.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
    <script>
        new WOW().init();
    </script>
</head>
<body>
    @include('frontend.partials._topbar')
    @include('frontend.partials._header')
    @include('frontend.partials._navbar')
    @yield('content')
    @include('frontend.partials._footer')

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="header" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="header"><strong>Login/Sign Up</strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 col-xs-12" id="content" style="padding: 20px">
                        @include('partials.flash_message')
                        <div class="form-group required" id="otpDiv" style="display: none; padding: 10px">
                            <div class="col-sm-12">
                                <label for="verificationCode" class="col-sm-12 control-label" style="margin-left: -15px;">Confirm OTP</label>
                                <input type="number" autocomplete="off" class="form-control" id="verificationCode" placeholder="Enter 6 Digit OTP">
                            </div>
                        </div>
                        <form>
                            @csrf
                            <div class="form-group required" id="phnNumDiv" style="padding: 10px">
                                <div class="col-sm-12">
                                    <label for="phone" class="control-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" placeholder="01*********" name="phone">
                                    <input type="hidden" id="redirectUrl">
                                </div>
                            </div>
                            <div class="form-group" id="submitSignup" style="display: none">
                                <div class="col-sm-12" style="padding: 20px">
                                    <label class="control-label"></label>
                                    <button type="submit" id="btn-confirm" style="background-color: #4cb320; color: white" class="btn"><i class="fa fa-sign-in"></i> Sign in</button>
                                </div>
                            </div>
                        </form>
                        <div id="nextDiv">
                            <div class="form-group required" style="padding: 10px">
                                <div class="col-sm-12" style="margin-top: 15px">
                                    <label for="recaptcha-container" class="control-label">Re-captcha</label>
                                    <div id="recaptcha-container"></div>
                                </div>
                            </div>
                            <div class="form-group" style="padding: 15px">
                                <div class="col-sm-12" style="padding: 10px">
                                    <button type="button" id="btn-next" style="background-color: #4cb320; color: white" class="btn"><i class="fa fa-arrow-circle-o-right"></i> Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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
                                        <option value="Booking">Booking Issues</option>
                                        <option value="Wallet">Wallet</option>
                                    </select>
                                </li>
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
    <!-- ALL JS FILES -->
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-firestore.js"></script>

    @if (session('error'))
        <script>$('#loginModal').modal('show')</script>
    @endif
    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyBFSSfkxHou362eI0CBenIn7TkOI7FYjt8",
            authDomain: "ponnobazar-a2aa0.firebaseapp.com",
            projectId: "ponnobazar-a2aa0",
            storageBucket: "ponnobazar-a2aa0.appspot.com",
            messagingSenderId: "134668856205",
            appId: "1:134668856205:web:195d249bbbcbf4b6bb6bc4",
            measurementId: "G-CYTHBG0TH3"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();

        window.onload=function() {
            var phone_number = sessionStorage.getItem("mobileNumber");
            $("#redirectUrl").val(window.location.href);
            if (phone_number !== "" || phone_number != null){
                $("#phoneNumber").val(phone_number);
            }
            render();
        };
        function render() {
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }
    </script>
    <script>
        var codeResult;
        $('#btn-next').click(function () {
            var number = document.getElementById('phone').value;
            // get the number
            if (number !== ""){
                $("#nextDiv").hide();
                $("#phnNumDiv").hide();
                $("#submitSignup").show();
            }
            var mobileNumber = "+88"+number;
            console.log(mobileNumber)

            var isphone = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
            if (mobileNumber.match(isphone)){
                // phone number authentication function
                // it takes two parameter number and recaptcha
                sessionStorage.setItem("mobileNumber", number);
                firebase.auth().signInWithPhoneNumber(mobileNumber, window.recaptchaVerifier).then(function (confirmationResult){
                    window.confirmationResult=confirmationResult;
                    codeResult=confirmationResult;
                    alert("Check your phone. We have sent an OTP.");
                    $("#otpDiv").show();
                }).catch (function (error) {
                    alert(error);
                    window.location.href = "{{route('index')}}";
                });
            }
        })
        $('#btn-confirm').click(function (e) {
            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var number2 = document.getElementById('phone').value;
            var code=document.getElementById("verificationCode").value;
            var redirectURL = $("#redirectUrl").val();
            codeResult.confirm(code).then(function (result){
                $.ajax({
                    type : 'POST',
                    url: '{{route('login.post')}}',
                    data : {
                        _token:_token, phone :number2
                    },
                    success : function(response)
                    {
                        console.log("response"+ response);
                        if (response === "success user"){
                            alert("You have successfully logged in you account!");
                            window.location.assign(redirectURL);
                        }
                        else if (response === "new user"){
                            alert("Please complete your account!");
                            window.location.assign('{{route('complete_register')}}');
                        }
                    },
                    error: function (error){
                        alert(error)
                    }
                });
            }).catch (function (error) {
                alert("Error: "+error.message)
            });
        })
    </script>
    <!---start-date-piker---->
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" />
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/breadcumb.js')}}"></script>
    <script>
        $(function() {
            $( "#datepicker,#datepicker1" ).datepicker();
        });
    </script>
    <!---/End-date-piker---->
    <script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/js/vendors.js')}}"></script>
</body>
</html>
