@extends('layouts.master')
@section('content')
    <!-- products-breadcrumb -->
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span></li>
                <li>Sign Up</li>
            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
    <div class="container" id="nextDiv">
        <div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title text-center" style="font-size: 26px"><strong>Sign Up</strong></div>
                    {{--                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>--}}
                </div>
                <div class="panel-body" >
                    <form class="form-horizontal" role="form" action="" method="">
                        <div style="display:none" id="alert" class="alert alert-danger">
                            <p>Error:</p>
                            <span id="errorSpan"></span>
                        </div>
                        <div class="form-group">
                            <label for="icode" class="col-md-3 control-label">Phone</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recaptcha-container" class="col-md-3 control-label">Re-captcha</label>
                            <div class="col-md-9">
                                <div id="recaptcha-container"></div>                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-next" type="button" class="btn btn-info"><i class="fa fa-arrow-circle-o-right"></i> Next</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    Already have an account! Sign In <a href="{{route('login')}}">Here</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="otpDiv" style="display: none">
        <div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title text-center" style="font-size: 26px"><strong>Confirm OTP</strong></div>
                    {{--                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>--}}
                </div>
                <div class="panel-body" >
                    <form class="form-horizontal" role="form" action="" method="">
                        <div style="display:none" id="alert" class="alert alert-danger">
                            <p>Error:</p>
                            <span id="errorSpan"></span>
                        </div>
                        <div class="form-group">
                            <label for="icode" class="col-md-3 control-label">OTP</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" id="verificationCode" placeholder="Enter OTP">
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-confirm" type="button" class="btn btn-info"><i class="fa fa-sign-in"></i> Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-firestore.js"></script>

    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
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
            render();
        };
        function render() {
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }
    </script>
    <script>
        $('#btn-next').click(function () {
            // get the number
            var number = document.getElementById('phone').value;
            if (number !== ""){
                $("#nextDiv").hide();
            }
            var mobileNumber = "+88"+number;
            console.log(mobileNumber)
            sessionStorage.setItem("mobileNumber", mobileNumber);
            var isphone = /^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
            if (mobileNumber.match(isphone)){
                // phone number authentication function
                // it takes two parameter number and recaptcha
                sessionStorage.setItem("mobileNumber", mobileNumber);
                firebase.auth().signInWithPhoneNumber(mobileNumber, window.recaptchaVerifier).then(function (confirmationResult){
                    window.confirmationResult=confirmationResult;
                    codeResult=confirmationResult;
                    console.log(codeResult)
                    alert("Check your phone. We have sent an OTP.");
                    $("#otpDiv").show();
                }).catch (function (error) {
                    alert(error)
                });
            }
        })
        $('#btn-confirm').click(function () {
            var code=document.getElementById("verificationCode").value;
            codeResult.confirm(code).then(function (result){
                alert("Please complete registration!!");
                window.location.href = "{{route('complete_register')}}";
            }).catch (function (error) {
                alert(error.message)
            });
        })
    </script>
@endsection
