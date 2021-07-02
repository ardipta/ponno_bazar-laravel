@extends('Admin.master')
@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Dashboard</h3>
            <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
        </div>
        <section class="section">
            <div class="row mb-2">
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Total Bus Service</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{count($bus_info)}} </p>
                                    </div>
                                </div>
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <div class="card-title">
                                        <i class="fa fa-truck fa-3x" style="color: white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Total Ticket Purchase</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>1</p>
                                    </div>
                                </div>
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <div class="card-title">
                                        <i class="fa fa-book fa-3x" style="color: white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Total registered user</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>{{count($total_users)}}</p>
                                    </div>
                                </div>
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <div class="card-title">
                                        <i class="fa fa-user fa-3x" style="color: white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card card-statistic">
                        <div class="card-body p-0">
                            <div class="d-flex flex-column">
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <h3 class='card-title'>Total Purchase amount</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>0৳</p>
                                    </div>
                                </div>
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <div class="card-title">
                                        <i class="fa fa-tags fa-3x" style="color: white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1>
                <marquee behavior="scroll">Welcome to ponnobazar Admin Panel.</marquee>
            </h1>
            <div class="card">
                <div class="card-header text-center" style="font-weight: bolder; font-size: 20px">
                    Bus Service Details
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
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
                            <th>Date From</th>
                            <th>Date To</th>
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
                                <td>{{$bus->fare}} ৳</td>
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
        </section>
    </div>
@endsection
