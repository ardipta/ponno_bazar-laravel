<?php
$image = auth()->user()->image
?>
<style>
    .contact{
        padding: 4%;
        height: 900px;
    }

    .col-md-3{
        background: #ff7d66;
        padding: 4%;
        border-top-left-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
    }
    .contact-info{
        margin-top:10%;
    }
    .contact-info img{
        margin-bottom: 15%;
    }
    .contact-info h2{
        margin-bottom: 10%;
    }
    .col-md-9{
        background: #fff;
        padding: 3%;
        border-top-right-radius: 0.5rem;
        border-bottom-right-radius: 0.5rem;
    }
    .contact-form label{
        font-weight:600;
    }
    .contact-form button{
        background: #2f323e;
        color: #fff;
        font-weight: 600;
        width: 25%;
    }
    .contact-form button:focus{
        box-shadow:none;
    }

</style>

@extends('Users.master')
@section('content')
    <div class="page-wrapper">
        <div class="container contact">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-info text-center">
                        @if(auth()->user()->image === "" || auth()->user()->image === null)
                            <i style="color: white" class="fa fa-user fa-5x"></i>
                        @else
                            <img src="{{asset("uploads/images/{$image}")}}" class="img-fluid" style="max-width: 100%">
                        @endif
                        <h2 style="color: white">User Profile</h2>
                        <h4 style="color: white">Update your profile information.</h4>
                    </div>
                </div>
                <div class="col-md-9">
                    @include('partials.flash_message')
                    <div class="contact-form">
                        <form enctype="multipart/form-data" class="form-group" action="{{route('update_profile.post')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label col-sm-6">First Name</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{auth()->user()->first_name}}" name="fName">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-sm-6">Last Name</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{auth()->user()->last_name}}" name="lName">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label col-sm-6">Date of Birth</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{auth()->user()->date_of_birth}}" name="dob">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-sm-6">Gender</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{auth()->user()->gender}}" name="gender">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label col-sm-6">Phone Number</label>
                                    <div class="form-group">
                                        <input class="form-control" name="phn" value="{{auth()->user()->phone}}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label col-sm-6">Upload Image</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 form-group pt-3">
                                    <button type="submit" class="btn btn-default">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('Users.partials.user_footer')
    </div>
@endsection
