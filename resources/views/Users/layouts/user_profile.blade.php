<?php
$image = auth()->user()->image
    ?>
@extends('Users.master')
@section('content')
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
                                            <input type="text" class="form-control" value="{{auth()->user()->first_name}}" name="fName">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{auth()->user()->last_name}}" name="lName">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Date of Birth</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{auth()->user()->date_of_birth}}" name="dob">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Gender</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{auth()->user()->gender}}" name="gender">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Phone Number</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" name="phn" value="{{auth()->user()->phone}}" />
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
