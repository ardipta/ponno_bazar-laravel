@extends('layouts.pages.master')
@section('content')
{{--    <!-- products-breadcrumb -->--}}
{{--    <div class="products-breadcrumb">--}}
{{--        <div class="container">--}}
{{--            <ul>--}}
{{--                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('index')}}">Home</a><span>|</span></li>--}}
{{--                <li><i class="fa fa-outdent" aria-hidden="true"></i><a href="{{route('bus_ticket')}}">Bus Ticket</a><span>|</span></li>--}}
{{--                <li>Search Result</li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- //products-breadcrumb -->--}}
    <section class="section">
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
                                <span style="font-weight: bold; font-size: 20px; color: black">Route: {{ $pep->bus_service_name }}</span><br>
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
