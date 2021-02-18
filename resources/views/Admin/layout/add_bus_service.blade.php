@extends('Admin.master')
@section('content')
    <style>
        .contact{
            padding: 4%;
            height: 900px;
        }
        @media (max-width: 767px){
                .contact{
                    padding: 4%;
                    height: 1600px;
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
    <div class="page-wrapper">
    <div class="container contact">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info text-center">
                    <i class="fa fa-bus fa-5x"></i>
                    <h2>Add Bus Service</h2>
                    <h4>Fill up all the information.</h4>
                </div>
            </div>
                <div class="col-md-9">
                <div class="contact-form">
                    <form class="form-group" action="{{route('save_bus_info')}}" method="POST">
                        @csrf
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-2">From</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Enter From Point" name="from">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-2">To</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Enter To Point" name="to">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Bus Service Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Enter Bus Service Name" name="bus_service_name">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Bus Type</label>
                                        <div class="col-sm-10">
                                            <select name="bus_type" class="form-control">
                                                <option selected disabled>--Select Bus Type--</option>
                                                <option value="AC">AC</option>
                                                <option value="Non-Ac">Non-AC</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Bus Number</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Enter Bus Number" name="bus_number">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Bus Model</label>
                                        <div class="col-sm-10">
                                            <select name="bus_model" class="form-control">
                                                <option selected disabled>--Select Bus Model--</option>
                                                <option value="hino">Hino, AK1J Super Plus</option>
                                                <option value="hino1j">Hino-1J</option>
                                                <option value="hundai">Hyundai</option>
                                                <option value="volvo">VOLVO</option>
                                                <option value="scania">Scania, AC Elite Class</option>
                                                <option value="universe">Hyundai Universe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Departure Time</label>
                                        <div class="col-sm-10">
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
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Arrival Time</label>
                                        <div class="col-sm-10">
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
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Date Range From</label>
                                        <div class="col-sm-10">
                                            <input type="date" style="background: #ff9b00; color: #313131" class="form-control" name="date_range_from">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Date Range To</label>
                                        <div class="col-sm-10">
                                            <input type="date" style="background: #ff9b00; color: #313131" class="form-control" name="date_range_to">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Total Seat</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" placeholder="Enter Total Number of Seat" name="total_seat">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-6">Fare (৳)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Enter Fare Per Seat" name="fare">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-6">Description(optional)</label>
                                <div class="col-sm-11">
                                    <textarea class="form-control" name="desc" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
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
