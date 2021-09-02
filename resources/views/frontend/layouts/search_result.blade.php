@extends('frontend.master')
@section('content')
    <style>
        #table1 th{
            text-align: center;
        }
    </style>
    <div class=" container container-md-fluid ">
        <div class="row ">
            <div class="col-auto col-md-10 ">
                <nav aria-label="breadcrumb " class="second ">
                    <ol class="breadcrumb indigo lighten-6 first shadow-lg px-md-4">
                        <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-2">home</span></a></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-2"></span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span>Search Result</span></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section searchPage">
        <div class="card">
            <div class="card-header text-center" style="padding: 20px">
                <h2 style="font-weight: bolder">{{$key_from}} - {{$key_to}}</h2>
                <hr>
                <h3 style="font-weight: bolder">Date: {{ $key_date_range_from }}</h3>
            </div>
            <div class="card-body container-fluid" style="width:100%; overflow-x:auto;">
                <table class='align-middle mb-0 table table-borderless table-striped table-hover' id="table1">
                    <thead style="background-color: #4CB320; color: white">
                    <tr>
                        <th style="width: 5%">#</th>
                        <th style="width: 40%">Bus Operator</th>
                        <th style="width: 20%">Departure Time</th>
                        <th style="width: 20%">Arrival Time</th>
                        <th style="width: 10%">Seat Available</th>
                        <th style="width: 5%">Fare</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $pep)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>
                                <span style="font-weight: bold; font-size: 20px; color: black">{{ $pep->bus_service_name }}</span><br>
                                <span style="font-weight: bold; font-size: 20px; color: black">Route: {{ $pep->route }}</span><br>
                                <small>{{ $pep->bus_model }}, {{ $pep->bus_type }}</small><br>
                                <span><strong>Route:</strong> {{ $pep->from }} - {{ $pep->to }}</span><br>
                                <span><strong>Starting Point:</strong> {{ $pep->from }}</span><br>
                                <span><strong>Ending Point:</strong> {{ $pep->to }}</span>
                            </td>
                            <td style="color: black">{{ $pep->departure_time }}</td>
                            <td>{{ $pep->arrival_time }}</td>
                            <td>{{ $pep->total_seat }}</td>
                            <td>
                                <span>৳ {{ $pep->fare }}</span><br>
                                <br>
                                <form action="{{route('trip_info')}}" method="GET">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $pep->id}}" name="id">
                                    <input type="hidden" value="{{ $key_date_range_from }}" name="date_range_from">
                                    <button type="submit" class="btn btn-default" style="background-color: #4cb320; color: white">Next</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
