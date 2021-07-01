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
    <!--animate-->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
</head>
<body>
    @include('layouts.partials._topbar')
    @include('layouts.partials._header')
    @include('layouts.partials._navbar')
    @yield('content')
    @include('layouts.partials._footer')

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="header" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="header"><strong>Login</strong></h3>
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
                    console.log(codeResult)
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
                        else if (response === "admin"){
                            alert("Please login from admin panel!");
                            window.location.assign('{{route('admin_login')}}');
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
</body>
</html>