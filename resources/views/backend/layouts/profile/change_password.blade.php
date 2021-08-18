@extends('backend.master')
@section('content')
    <style>
        .contact{
            padding: 4%;
            height: 900px;
        }

        .col-md-3{
            background: #4cb320;
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
    <div class="bs-example">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Change Password</li>
            </ol>
        </nav>
    </div>
    <div class="page-wrapper">
        <div class="container contact">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-info text-center">
                        <i class="fa fa-key fa-5x" style="color: white;"></i>
                        <h2 style="color: white; margin-top: 10px">Change Password</h2>
                        <h4 style="color: white">Update your password.</h4>
                    </div>
                </div>
                <div class="col-md-9">
                    @include('partials.flash_message')
                    <div class="contact-form">
                        <form class="form-group" action="{{route('update_password.admin')}}" method="POST">
                            @csrf
                            <div class="col-6">
                                <label class="control-label col-sm-6">Current Password</label>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="current_password">
                                </div>
                                @if ($errors->has('current_password'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('current_password') }}</span>
                                @endif
                            </div>
                            <div class="col-6">
                                <label class="control-label col-sm-6">New Password</label>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="col-6">
                                <label class="control-label col-sm-6">Confirm Password</label>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 form-group pt-3">
                                    <button type="submit" class="btn btn-default">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
