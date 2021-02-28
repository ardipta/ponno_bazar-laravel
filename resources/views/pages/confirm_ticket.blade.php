@extends('layouts.master')
@section('content')
    <!--products-breadcrumb -->
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span></li>
                <li><i class="fa fa-outdent" aria-hidden="true"></i><a href="{{route('bus_ticket')}}">Bus Ticket</a><span>|</span></li>
                <li>Confirm Ticket</li>
            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="margin: 20px">
                <div class="form-row col-md-8">
                    <h3 style="text-align: center">Passenger Details</h3>
                    <hr>
                    <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="fullName" class="form-control" value="{{auth()->user()->first_name." ".auth()->user()->last_name}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone Number</label>
                                    <input name="totalFare" type="number" class="form-control" value="{{auth()->user()->phone}}">
                                    {{--                                    <input name="id" type="hidden" value="{{$trip->id}}" class="form-control">--}}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Gender</label>
                                    <input type="text" name="gender" class="form-control" value="{{auth()->user()->gender}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email Address</label>
                                    <input name="emailAddress" type="email" class="form-control" placeholder="Enter your email address">
                                    {{--                                    <input name="id" type="hidden" value="{{$trip->id}}" class="form-control">--}}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <button type="submit" style="background-color: #84C639; color: white" class="btn form-control">Confirm</button>
                                </div>
                            </div>
                    </form>
                </div>
                <div class="form-row col-md-4">
                    <h3>
                        Journey Details
                    </h3>
                    <hr>
                    @foreach($confirms as $confirm)
                        <span style="font-size: 22px; font-weight: bold">{{$confirm->from}} - {{$confirm->to}}</span><br>
                        <span>{{$confirm->bus_service_name}}</span><br><br>
                        Date of Journey: <span>{{$confirm->date_range_from.", ".$confirm->departure_time}}</span><br>
                        Number of Seat: <span id="fare">{{$seat_number}}</span><br>
                        Total: ৳ <span id="fare">{{$total_fare}}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
