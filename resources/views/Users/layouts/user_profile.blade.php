<?php
$image = auth()->user()->image
    ?>
@extends('Users.master')
@section('content')
    <style>
        .contact{
            padding: 4%;
            height: 530px;
        }
        @media (max-width: 767px){
            .contact{
                padding: 4%;
                height: 1500px;
            }
        }

        .col-md-3{
            background: #ff9b00;
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
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ml-auto">
                        <li><a href="{{route('users.dashboard')}}" style="color: #2f323e"><strong>Dashboard</strong></a></li>
                        <li><a href="" style="color: #2f323e"><strong> / User Profile</strong></a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="page-wrapper">
        <div class="container contact" style="background-color: #2f323e">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-info text-center">
                        @if(auth()->user()->image === "")
                            <i class="fa fa-user fa-5x"></i>
                        @else
                            <img src="{{asset("uploads/images/{$image}")}}" class="img-fluid" style="max-width: 100%">
                        @endif

                        <h2>User Profile</h2>
                        <h4>Update your profile information.</h4>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="contact-form">
                        <form enctype="multipart/form-data" action="{{route('update_profile.post')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{$users->first_name}}" name="fName">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{$users->last_name}}" name="lName">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Date of Birth</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{$users->date_of_birth}}" name="dob">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Gender</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{$users->gender}}" name="gender">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Phone Number</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" name="phn" value="{{$users->phone}}" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Upload Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
