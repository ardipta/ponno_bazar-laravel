@extends('layouts.master')
@section('content')
    <!-- products-breadcrumb -->
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span></li>
                <li><i class="fa fa-outdent" aria-hidden="true"></i><a href="{{route('bus_ticket')}}">Bus Ticket</a><span>|</span></li>
                <li>Search Result</li>
            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
    <div class="container-fluid">
        <div class="row">
            <div style="background-color: #FA1818" class="col-md-12">
                <h3 style="text-align: center; padding-top: 20px; color: white">{{$key_from}} - {{$key_to}}</h3>
                <h4 style="text-align: center; color: white"> {{ $key_date_range_from }}</h4><br>
            </div>
            @if(sizeof($posts))
                <div class="form-row col-md-12 col-xs-12" style="margin-top: 10px;">
                    <div class="col-md-4 col-xs-4">
                        <span><strong>Bus Operator</strong></span>
                        <hr>
                    </div>
                    <div class="col-md-2 col-xs-2" style="text-align: center">
                        <span><strong>Departure Time</strong></span>
                        <hr>
                    </div>
                    <div class="col-md-2 col-xs-2" style="text-align: center">
                        <span><strong>Arrival Time</strong></span>
                        <hr>
                    </div>
                    <div class="col-md-2 col-xs-2" style="text-align: center">
                        <span><strong>Seat Available</strong></span>
                        <hr>
                    </div>
                    <div class="col-md-2 col-xs-2" style="text-align: center">
                        <span><strong>Fare</strong></span>
                        <hr>
                    </div>
                </div>
                @foreach($posts as $pep)
                    <div class="form-row col-md-12 col-xs-12" style="margin-bottom: 20px">
                        <div class="col-md-4 col-xs-4">
                            <span style="font-weight: bold">{{ $pep->bus_service_name }}</span><br>
                            <small>{{ $pep->bus_model }}</small><br>
                            <span><strong>Route:</strong> {{ $pep->from }} - {{ $pep->to }}</span><br>
                            <span><strong>Starting Point:</strong> {{ $pep->from }}</span><br>
                            <span><strong>Ending Point:</strong> {{ $pep->to }}</span>
                        </div>
                        <div class="col-md-2 col-xs-2" style="text-align: center">
                            <span>{{ $pep->departure_time }}</span><br>
                        </div>
                        <div class="col-md-2 col-xs-2" style="text-align: center">
                            <span>{{ $pep->arrival_time }}</span><br>
                        </div>
                        <div class="col-md-2 col-xs-2" style="text-align: center">
                            <span>{{ $pep->total_seat }}</span><br>
                        </div>
                        <div class="col-md-2 col-xs-2" style="text-align: center">
                            <span style="font-size: 18px; font-weight: bold">৳ {{ $pep->fare }}</span><br>
                            <br>
                            <form action="{{route('trip_info')}}" method="GET">
                                {{ csrf_field() }}
                                <input type="text" style="display: none" value="{{ $pep->id}}" name="id">
                                <button type="submit" class="btn btn-default" style="background-color: #212121; color: white">Next</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
            <h2 class="text-center">Sorry, No bus found!!</h2>
            @endif
        </div>
    </div>
@endsection
