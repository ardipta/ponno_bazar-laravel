@extends('frontend.master')
@section('content')
    <div class=" container container-md-fluid ">
        <div class="row ">
            <div class="col-auto col-md-10 ">
                <nav aria-label="breadcrumb " class="second ">
                    <ol class="breadcrumb indigo lighten-6 first shadow-lg px-md-4">
                        <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-2">home</span></a></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-2"></span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-2">Search Result</span></a></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-2"></span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span>Trip Info</span></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid infoPage">
        <div class="row">
            <div class="col-md-12" style="margin: 20px">
                @foreach($trips as $trip)
                <div class="form-row col-md-8">
                    <h3 style="text-align: center; font-weight: bolder">Book Seat</h3>
                    <hr>
                    <form action="{{route('confirm_ticket')}}" method="GET">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label style="margin-bottom: 10px;">Number of Seat</label>
                                <input type="number" id="seatNumber" min="1" name="seatNumber" class="form-control" required placeholder="Enter Number of Seat">
                            </div>
                            <div class="form-group col-md-6">
                                <label style="margin-bottom: 10px;">Total</label>
                                <input id="totalFareAmount" readonly name="totalFare" type="number" class="form-control">
                                <input name="id" type="hidden" value="{{$trip->id}}" class="form-control">
                                <input name="journeyDate" type="hidden" value="{{$journeyDate}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-0 pt-3 d-flex flex-column align-items-center text-center">
                                <button type="submit" id="nextButton" title="Please enter 1 seat number to enable next button." style="background-color: #84C639; color: white; width: 120px;" disabled class="btn btn-default">Next</button>
                            </div>
                        </div>
{{--                        <div class="form-row">--}}
{{--                            <div class="form-group col-sm-offset-2 d-flex flex-column align-items-center text-center">--}}
{{--                                <button type="submit" style="background-color: #84C639; color: white" class="btn form-control">Next</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </form>
                </div>
                <div class="form-row col-md-4">
                    <h3 style="font-weight: bolder">
                        Trip Details
                    </h3>
                    <hr>
                    <span style="font-size: 22px; font-weight: bold">{{$trip->from}} - {{$trip->to}}</span><br>
                    <span>{{$trip->bus_service_name}}</span><br><br>
                    Date of Journey: <span>{{$journeyDate}}</span><br>
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

        $("#seatNumber").on("change", function() {
            var fare = parseFloat($("#fare").text());
            if ($(this).val()>0){
                $("#nextButton").prop('disabled', false);
            }
            else if ($(this).val()===0){
                $("#nextButton").prop('disabled', true);
            }
            var totalFare = fare * parseFloat($(this).val());
            $("#totalFareAmount").val(totalFare);
        })
    </script>
@endsection
