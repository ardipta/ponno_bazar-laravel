@extends('layouts.master')
@section('content')
    <!-- products-breadcrumb -->
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span></li>
                <li><i class="fa fa-outdent" aria-hidden="true"></i><a href="{{route('bus_ticket')}}">Bus Ticket</a><span>|</span></li>
                <li>Trip Details</li>
            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="margin: 20px">
                @foreach($trips as $trip)
                <div class="form-row col-md-8">
                    <h3 style="text-align: center">Book Seat</h3>
                    <hr>
                    <form action="{{route('confirm_ticket')}}" method="GET">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Number of Seat</label>
                                <input type="number" id="seatNumber" name="seatNumber" class="form-control" placeholder="Enter Number of Seat">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Total</label>
                                <input id="totalFareAmount" readonly name="totalFare" type="number" class="form-control">
                                <input name="id" type="hidden" value="{{$trip->id}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <button type="submit" style="background-color: #84C639; color: white" class="btn form-control">Next</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="form-row col-md-4">
                    <h3>
                        Trip Details
                    </h3>
                    <hr>
                    <span style="font-size: 22px; font-weight: bold">{{$trip->from}} - {{$trip->to}}</span><br>
                    <span>{{$trip->bus_service_name}}</span><br><br>
                    Date of Journey: <span>{{$trip->date_range_from}}</span><br>
                    Departure Time: <span>{{$trip->departure_time}}</span><br>
                    Arrival Time: <span>{{$trip->arrival_time}}</span><br>
                    Fare: ৳ <span id="fare">{{$trip->fare}}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        window.onload=function() {
            var fare = parseFloat($("#fare").text());
            var totalFare = fare * parseFloat($('#seatNumber').val());
            if ($('#seatNumber').val() === "" || $('#seatNumber').val() == null){
                $('#seatNumber').val(1);
                $("#totalFareAmount").val(fare);
            }
            else {
                $("#totalFareAmount").val(totalFare);
            }
        };

        $("#seatNumber").on("input", function() {
            var fare = parseFloat($("#fare").text());
            var totalFare = fare * parseFloat($(this).val());
            $("#totalFareAmount").val(totalFare);
        })
    </script>
@endsection
