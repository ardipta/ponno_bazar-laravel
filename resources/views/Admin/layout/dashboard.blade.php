@extends('Admin.master')
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
                            <li><a href="#">Admin</a></li>
                            <li><a href="#"> / Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
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
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total Bus Service</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash"><canvas width="67" height="30"
                                                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ml-auto"><span class="counter text-success">659</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total Registered Customer</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash2"><canvas width="67" height="30"
                                                                 style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ml-auto"><span class="counter text-purple">869</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total visit</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash3"><canvas width="67" height="30"
                                                                 style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ml-auto"><span class="counter text-info">911</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <h1>
                    <marquee behavior="scroll">Welcome to ponnobazar Admin Panel. Add bus service from left sidebar.</marquee>
                </h1>
                <div class="col-md-12">
                    <table id="example" class="table table-striped table-bordered" style="max-width:100%">
                        <thead>
                        <tr>
                            <th>From</th>
                            <th>To</th>
                            <th>Bus Service</th>
                            <th>Bus Type</th>
                            <th>Bus Number</th>
                            <th>Model</th>
                            <th>Dep. time</th>
                            <th>Arr. time</th>
                            <th>Date Range From</th>
                            <th>Date Range To</th>
                            <th>Total Seat</th>
                            <th>Fare</th>
                            <th>Image</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bus_info as $bus)
                            <tr>
                                <td>{{$bus->from}}</td>
                                <td>{{$bus->to}}</td>
                                <td>{{$bus->bus_service_name}}</td>
                                <td>{{$bus->bus_type}}</td>
                                <td>{{$bus->bus_number}}</td>
                                <td>{{$bus->bus_model}}</td>
                                <td>{{$bus->departure_time}}</td>
                                <td>{{$bus->arrival_time}}</td>
                                <td>{{$bus->date_range_from}}</td>
                                <td>{{$bus->date_range_to}}</td>
                                <td>{{$bus->total_seat}}</td>
                                <td>{{$bus->fare}}</td>
                                @if($bus->bus_image)
                                    <td><img src="{{asset("uploads/bus_images/{$bus->bus_image}")}}" class="img-fluid" style="max-width: 100%; height: 50px"></td>
                                @else
                                    <td><img src="{{asset("images/bus_demo.png")}}" class="img-fluid" style="max-width: 100%; height: 50px"></td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
