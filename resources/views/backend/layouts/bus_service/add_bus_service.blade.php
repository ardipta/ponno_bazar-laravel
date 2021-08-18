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
                <li class="breadcrumb-item active">Add Bus Service</li>
            </ol>
        </nav>
    </div>
    <div class="page-wrapper">
    <div class="container contact">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info text-center">
                    <i class="fa fa-bus fa-5x" style="color: white;"></i>
                    <h2 style="color: white; margin-top: 10px">Add Bus Service</h2>
                    <h4 style="color: white">Fill up all the information.</h4>
                </div>
            </div>
                <div class="col-md-9">
                    @include('partials.flash_message')
                <div class="contact-form">
                    <form enctype="multipart/form-data" class="form-group" action="{{route('save_bus_info')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label class="control-label col-sm-2">From</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter From Point" name="from">
                                </div>
                                @if ($errors->has('from'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('from') }}</span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label class="control-label col-sm-2">To</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter To Point" name="to">
                                </div>
                                @if ($errors->has('to'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('to') }}</span>
                                @endif
                            </div>
                            <div class="col-md-4">
                                <label class="control-label col-sm-2">Route</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Route" name="route">
                                </div>
                                @if ($errors->has('route'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('route') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Bus Service Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Bus Service Name" name="bus_service_name">
                                </div>
                                @if ($errors->has('bus_service_name'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('bus_service_name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Bus Type</label>
                                <div class="form-group">
                                    <select name="bus_type" class="form-control">
                                        <option selected disabled>--Select Bus Type--</option>
                                        <option value="AC">AC</option>
                                        <option value="Non-Ac">Non-AC</option>
                                    </select>
                                </div>
                                @if ($errors->has('bus_type'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('bus_type') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Bus Number</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Bus Number" name="bus_number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Bus Model</label>
                                <div class="form-group">
                                    <select name="bus_model" class="form-control">
                                        <option selected disabled>--Select Bus Model--</option>
                                        <option value="Hino, AK1J Super Plus">Hino, AK1J Super Plus</option>
                                        <option value="Hino-1J">Hino-1J</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="VOLVO">VOLVO</option>
                                        <option value="Scania, AC Elite Class">Scania, AC Elite Class</option>
                                        <option value="Hyundai Universe">Hyundai Universe</option>
                                        <option value="Sleeper Couch">Sleeper Couch</option>
                                    </select>
                                </div>
                                @if ($errors->has('bus_model'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('bus_model') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Departure Time</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Departure Time" name="departure_time" list="depTime" autocomplete="off">
                                    <datalist class="form-control" id="depTime" style="display: none" >
                                        <option value="12:00 PM"></option>
                                        <option value="12:30 PM"></option>
                                        <option value="1:00 PM"></option>
                                        <option value="1:30 PM"></option>
                                        <option value="2:00 PM"></option>
                                        <option value="2:30 PM"></option>
                                        <option value="3:00 PM"></option>
                                        <option value="3:30 PM"></option>
                                        <option value="4:00 PM"></option>
                                        <option value="4:30 PM"></option>
                                        <option value="5:00 PM"></option>
                                        <option value="5:30 PM"></option>
                                        <option value="6:00 PM"></option>
                                        <option value="6:30 PM"></option>
                                        <option value="7:00 PM"></option>
                                        <option value="7:30 PM"></option>
                                        <option value="8:00 PM"></option>
                                        <option value="8:30 PM"></option>
                                        <option value="9:00 PM"></option>
                                        <option value="9:30 PM"></option>
                                        <option value="10:00 PM"></option>
                                        <option value="10:30 PM"></option>
                                        <option value="11:00 PM"></option>
                                        <option value="11:30 PM"></option>
                                        <option value="12:00 AM"></option>
                                        <option value="12:30 AM"></option>
                                        <option value="1:00 AM"></option>
                                        <option value="1:30 AM"></option>
                                        <option value="2:00 AM"></option>
                                        <option value="2:30 AM"></option>
                                        <option value="3:00 AM"></option>
                                        <option value="3:30 AM"></option>
                                        <option value="4:00 AM"></option>
                                        <option value="4:30 AM"></option>
                                        <option value="5:00 AM"></option>
                                        <option value="5:30 AM"></option>
                                        <option value="6:00 AM"></option>
                                        <option value="6:30 AM"></option>
                                        <option value="7:00 AM"></option>
                                        <option value="7:30 AM"></option>
                                        <option value="8:00 AM"></option>
                                        <option value="8:30 AM"></option>
                                        <option value="9:00 AM"></option>
                                        <option value="9:30 AM"></option>
                                        <option value="10:00 AM"></option>
                                        <option value="10:30 AM"></option>
                                        <option value="11:00 AM"></option>
                                        <option value="11:30 AM"></option>
                                    </datalist>
                                </div>
                                @if ($errors->has('departure_time'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('departure_time') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Arrival Time</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Arrival Time" name="arrival_time" list="arrtime" autocomplete="off">
                                    <datalist class="form-control" id="arrtime" style="display: none" >
                                        <option value="12:00 PM"></option>
                                        <option value="12:30 PM"></option>
                                        <option value="1:00 PM"></option>
                                        <option value="1:30 PM"></option>
                                        <option value="2:00 PM"></option>
                                        <option value="2:30 PM"></option>
                                        <option value="3:00 PM"></option>
                                        <option value="3:30 PM"></option>
                                        <option value="4:00 PM"></option>
                                        <option value="4:30 PM"></option>
                                        <option value="5:00 PM"></option>
                                        <option value="5:30 PM"></option>
                                        <option value="6:00 PM"></option>
                                        <option value="6:30 PM"></option>
                                        <option value="7:00 PM"></option>
                                        <option value="7:30 PM"></option>
                                        <option value="8:00 PM"></option>
                                        <option value="8:30 PM"></option>
                                        <option value="9:00 PM"></option>
                                        <option value="9:30 PM"></option>
                                        <option value="10:00 PM"></option>
                                        <option value="10:30 PM"></option>
                                        <option value="11:00 PM"></option>
                                        <option value="11:30 PM"></option>
                                        <option value="12:00 AM"></option>
                                        <option value="12:30 AM"></option>
                                        <option value="1:00 AM"></option>
                                        <option value="1:30 AM"></option>
                                        <option value="2:00 AM"></option>
                                        <option value="2:30 AM"></option>
                                        <option value="3:00 AM"></option>
                                        <option value="3:30 AM"></option>
                                        <option value="4:00 AM"></option>
                                        <option value="4:30 AM"></option>
                                        <option value="5:00 AM"></option>
                                        <option value="5:30 AM"></option>
                                        <option value="6:00 AM"></option>
                                        <option value="6:30 AM"></option>
                                        <option value="7:00 AM"></option>
                                        <option value="7:30 AM"></option>
                                        <option value="8:00 AM"></option>
                                        <option value="8:30 AM"></option>
                                        <option value="9:00 AM"></option>
                                        <option value="9:30 AM"></option>
                                        <option value="10:00 AM"></option>
                                        <option value="10:30 AM"></option>
                                        <option value="11:00 AM"></option>
                                        <option value="11:30 AM"></option>
                                    </datalist>
                                </div>
                                @if ($errors->has('arrival_time'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('arrival_time') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Date Range From</label>
                                <div class="form-group">
                                    <input type="date" style="background: #4cb320; color: white" class="form-control" name="date_range_from">
                                </div>
                                @if ($errors->has('date_range_from'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('date_range_from') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Date Range To</label>
                                <div class="form-group">
                                    <input type="date" style="background: #4cb320; color: white" class="form-control" name="date_range_to">
                                </div>
                                @if ($errors->has('date_range_to'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('date_range_to') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Total Seat</label>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Enter Total Number of Seat" name="total_seat">
                                </div>
                                @if ($errors->has('total_seat'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('total_seat') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Fare (৳)</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Fare Per Seat" name="fare">
                                </div>
                                @if ($errors->has('fare'))
                                    <span class="text-danger" style="font-weight: bold">{{ $errors->first('fare') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Description (optional)</label>
                                <div class="col-sm-11">
                                    <textarea class="form-control" name="desc" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label col-sm-6">Upload Image</label>
                                <div class="form-group">
                                    <input type="file" class="form-control" name="bus_image">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 form-group pt-3">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
