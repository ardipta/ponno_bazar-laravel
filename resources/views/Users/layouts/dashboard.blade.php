@extends('Users.master')
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Dashboard</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ml-auto">
                            <li><a href="#">User</a></li>
                            <li><a href="#"> / Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('partials.flash_message')
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Three charts -->
            <!-- ============================================================== -->
            <div class="row justify-content-center">
                <span style="font-size: 44px">
                    <marquee behavior="scroll">Welcome to ponnobazar User Dashboard.</marquee>
                </span>
            </div>
            <div class="col-md-12">
                <h2 style="text-align: center; font-weight: bold">Purchase History</h2>
                <table id="example" class="table table-striped table-bordered" style="max-width:100%">
                    <thead>
                        <tr>
                            <th>Bus Service</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Journey Date</th>
                            <th>Departure time</th>
                            <th>Seat Range</th>
                            <th>Fare</th>
                            <th>Payment Status</th>
                            <th>Download Ticket</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($ticket_info as $ticket)
                        @if($ticket->passenger_phone === auth()->user()->phone)
                            <tr>
                                <td>{{$ticket->bus_service_name}}</td>
                                <td>{{$ticket->from}}</td>
                                <td>{{$ticket->to}}</td>
                                <td>{{$ticket->date_range_from}}</td>
                                <td style="text-align: center">{{$ticket->departure_time}}</td>
                                <td style="text-align: center">{{$ticket->booked_seat}}</td>
                                <td style="text-align: center">{{$ticket->total_fare}} BDT</td>
                                <td style="text-align: center">Due</td>
                                <td style="text-align: center">Download</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
@endsection
