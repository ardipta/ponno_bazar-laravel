@extends('layouts.master')
@section('content')
    <!-- products-breadcrumb -->
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span></li>
                <li>Sign In</li>
            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
    @include('partials.flash_message')
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title text-center" style="font-size: 26px"><strong>Sign In</strong></div>
{{--                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>--}}
                </div>

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form class="form-horizontal" role="form" method="POSt" action="{{route('login.post')}}">
                        @csrf
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="phone" placeholder="Enter your phone number">
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="Enter your password">
                        </div>
                        <div class="input-group">
                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                                <button id="btn-login" type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
{{--                                <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>--}}

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    Don't have an account! Sign Up <a href="{{route('register')}}">Here</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
