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
                <div class="col-md-12 col-xs-12" style="margin-top: 20px">
                    <table id="example" class="table table-striped table-bordered" style="max-width:100%">
                        <thead>
                        <tr>
                            <th style="color: black">Bus Operator</th>
                            <th style="color: black">Departure Time</th>
                            <th style="color: black">Arrival Time</th>
                            <th style="color: black">Seat Available</th>
                            <th style="color: black">Fare</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $pep)
                            <tr>
                                <td><span style="font-weight: bold; font-size: 20px; color: black">{{ $pep->bus_service_name }}</span><br>
                                    <small>{{ $pep->bus_model }}</small><br>
                                    <span><strong>Route:</strong> {{ $pep->from }} - {{ $pep->to }}</span><br>
                                    <span><strong>Starting Point:</strong> {{ $pep->from }}</span><br>
                                    <span><strong>Ending Point:</strong> {{ $pep->to }}</span>
                                </td>
                                <td style="color: black">{{ $pep->departure_time }}</td>
                                <td style="color: black">{{ $pep->arrival_time }}</td>
                                <td style="color: black">{{ $pep->total_seat }}</td>
                                <td style="color: black">
                                    <span style="font-size: 18px; font-weight: bold">৳ {{ $pep->fare }}</span><br>
                                    <br>
                                    <form action="{{route('trip_info')}}" method="GET">
                                        {{ csrf_field() }}
                                        <input type="text" style="display: none" value="{{ $pep->id}}" name="id">
                                        <button type="submit" class="btn btn-default" style="background-color: #212121; color: white">Next</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
            <h2 class="text-center">Sorry, No bus found!!</h2>
            @endif
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
