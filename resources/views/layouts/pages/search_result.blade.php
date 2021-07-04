@extends('layouts.pages.master')
@section('content')
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
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                    <tr>
                        <th>Bus Operator</th>
                        <th>Departure Time</th>
                        <th>Arrival Time</th>
                        <th>Seat Available</th>
                        <th>Fare</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $pep)
                        <tr>
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
