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
                    <form class="form-horizontal" role="form" action="{{route('register.post')}}" method="POST">
                        @csrf
                        <div style="display:none" id="alert" class="alert alert-danger">
                            <p>Error:</p>
                            <span id="errorSpan"></span>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-3 control-label">Phone</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name" class="col-md-3 control-label">First Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="last_name" placeholder="Enter your last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Date of Birth</label>
                            <div class="col-md-9">
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <input type="text" class="form-control" placeholder="Year" name="year" list="yearID" autocomplete="off">
                                        <datalist class="form-control" id="yearID" style="display: none" >
                                            <option value="1970"></option>
                                            <option value="1971"></option>
                                            <option value="1972"></option>
                                            <option value="1973"></option>
                                            <option value="1974"></option>
                                            <option value="1975"></option>
                                            <option value="1976"></option>
                                            <option value="1977"></option>
                                            <option value="1978"></option>
                                            <option value="1979"></option>
                                            <option value="1980"></option>
                                            <option value="1981"></option>
                                            <option value="1982"></option>
                                            <option value="1983"></option>
                                            <option value="1984"></option>
                                            <option value="1985"></option>
                                            <option value="1986"></option>
                                            <option value="1987"></option>
                                            <option value="1988"></option>
                                            <option value="1989"></option>
                                            <option value="1990"></option>
                                            <option value="1991"></option>
                                            <option value="1992"></option>
                                            <option value="1993"></option>
                                            <option value="1994"></option>
                                            <option value="1995"></option>
                                            <option value="1996"></option>
                                            <option value="1997"></option>
                                            <option value="1998"></option>
                                            <option value="1999"></option>
                                            <option value="2000"></option>
                                            <option value="2001"></option>
                                            <option value="2002"></option>
                                            <option value="2003"></option>
                                            <option value="2004"></option>
                                            <option value="2005"></option>
                                            <option value="2006"></option>
                                            <option value="2007"></option>
                                            <option value="2008"></option>
                                            <option value="2009"></option>
                                            <option value="2010"></option>
                                            <option value="2011"></option>
                                            <option value="2012"></option>
                                            <option value="2013"></option>
                                            <option value="2014"></option>
                                            <option value="2015"></option>
                                            <option value="2016"></option>
                                            <option value="2017"></option>
                                            <option value="2018"></option>
                                            <option value="2019"></option>
                                            <option value="2020"></option>
                                            <option value="2021"></option>
                                            <option value="2022"></option>
                                            <option value="2023"></option>
                                            <option value="2024"></option>
                                            <option value="2025"></option>
                                            <option value="2026"></option>
                                            <option value="2027"></option>
                                            <option value="2028"></option>
                                            <option value="2029"></option>
                                            <option value="2030"></option>
                                        </datalist>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="text" class="form-control" placeholder="Month" name="month" list="monthID" autocomplete="off">
                                        <datalist class="form-control" id="monthID" style="display: none" >
                                            <option value="january"></option>
                                            <option value="february"></option>
                                            <option value="march"></option>
                                            <option value="april"></option>
                                            <option value="may"></option>
                                            <option value="jun"></option>
                                            <option value="july"></option>
                                            <option value="august"></option>
                                            <option value="september"></option>
                                            <option value="october"></option>
                                            <option value="november"></option>
                                            <option value="december"></option>
                                        </datalist>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="text" class="form-control" placeholder="Day" name="day" list="dayID" autocomplete="off">
                                        <datalist class="form-control" id="dayID" style="display: none" >
                                            <option value="01"></option>
                                            <option value="02"></option>
                                            <option value="03"></option>
                                            <option value="04"></option>
                                            <option value="05"></option>
                                            <option value="06"></option>
                                            <option value="07"></option>
                                            <option value="08"></option>
                                            <option value="09"></option>
                                            <option value="10"></option>
                                            <option value="11"></option>
                                            <option value="12"></option>
                                            <option value="13"></option>
                                            <option value="14"></option>
                                            <option value="15"></option>
                                            <option value="16"></option>
                                            <option value="17"></option>
                                            <option value="18"></option>
                                            <option value="19"></option>
                                            <option value="20"></option>
                                            <option value="21"></option>
                                            <option value="22"></option>
                                            <option value="23"></option>
                                            <option value="24"></option>
                                            <option value="25"></option>
                                            <option value="26"></option>
                                            <option value="27"></option>
                                            <option value="28"></option>
                                            <option value="29"></option>
                                            <option value="30"></option>
                                            <option value="31"></option>
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="genderID" class="col-md-3 control-label">Gender</label>
                            <div class="col-md-9">
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <input type="text" class="form-control" placeholder="Select" name="gender" list="genderID" autocomplete="off">
                                        <datalist class="form-control" id="genderID" style="display: none" >
                                            <option value="Male"></option>
                                            <option value="Female"></option>
                                            <option value="Other"></option>
                                        </datalist>
                                    </div>
                                    <div class="form-group col-md-5">
                                    </div>
                                    <div class="form-group col-md-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" placeholder="Enter a password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Conform Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm your password">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->
                            <div class="col-md-offset-3 col-md-9">
                                <button id="btn-confirm" type="submit" class="btn btn-info"><i class="fa fa-sign-in"></i> Confirm</button>
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
    <script>
        window.onload=function() {
            var phone_number = sessionStorage.getItem("mobileNumber");
            if (phone_number === "" || phone_number == null){
                window.location.href = "{{route('login')}}";
            }
            else {
                var res = phone_number.slice(3);
                $("#phone").val(res);
            }
        };
    </script>
@endsection
