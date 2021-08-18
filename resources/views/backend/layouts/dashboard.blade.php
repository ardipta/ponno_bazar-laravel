@extends('backend.master')
@section('content')
    <div class="main-content container-fluid">
        @include('partials.flash_message')
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
                                    <h3 class='card-title'>Total Buses Service</h3>
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
                                        <p>0</p>
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
                                    <h3 class='card-title'>Total Purchase</h3>
                                    <div class="card-right d-flex align-items-center">
                                        <p>0৳</p>
                                    </div>
                                </div>
                                <div class='px-3 py-3 d-flex justify-content-between'>
                                    <div class="card-title">
                                        <i class="fa fa-dollar-sign fa-3x" style="color: white"></i>
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
                <div class="card-body" style="width:100%; overflow-x:auto;">
                    <table class='align-middle mb-0 table table-borderless table-striped table-hover' id="table1">
                        <thead style="background-color: #4cb320; color: white">
                        <tr>
                            <th>ID</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Route</th>
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
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bus_info as $bus)
                            <tr style="color: black">
                                <td>{{$bus->id}}</td>
                                <td>{{$bus->from}}</td>
                                <td>{{$bus->to}}</td>
                                <td>{{$bus->route}}</td>
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
                                <td><img src="{{$bus->bus_image=="" ? asset('assets/images/bus.png') : asset("uploads/bus_images/{$bus->bus_image}")}}" class="img-fluid" style="max-width: 100%; height: 50px"></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="submit" title="Update/Edit" id="edit" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-edit"></i></button>
                                    </div>
                                    <div class="btn-group">
                                        <form action="" method="POST">
                                            @csrf
                                            <input type="hidden" name="deleteID" value="{{$bus->id}}">
                                            <button title="Delete" type="submit" class="btn"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade bd-example-modal-lg" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/add_bus_service" method="POST" id="editForm" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>From</label>
                                    <input type="text" name="edit_from" class="form-control" id="edit_from" style="border-radius: 5px" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>To</label>
                                    <input type="text" class="form-control" name="edit_to" id="edit_to" style="border-radius: 5px" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Route</label>
                                    <input type="text" class="form-control" name="edit_route" id="edit_route" style="border-radius: 5px" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Bus Service Name</label>
                                    <input type="text" class="form-control"  id="edit_bus_service_name" name="edit_bus_service_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Bus Type</label>
                                    <input type="text" class="form-control" name="edit_bus_type" id="edit_bus_type" style="border-radius: 5px" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Bus Number</label>
                                    <input type="text" class="form-control"  id="edit_bus_number" style="border-radius: 5px" name="edit_bus_number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Bus Model</label>
                                    <input type="text" class="form-control" name="edit_bus_model" id="edit_bus_model" style="border-radius: 5px" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Departure Time</label>
                                    <input type="text" class="form-control"  id="edit_departure_time" style="border-radius: 5px" name="edit_departure_time">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Arrival Time</label>
                                    <input type="text" class="form-control" name="edit_arrival_time" id="edit_arrival_time" style="border-radius: 5px" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Date Range From</label>
                                    <input type="text" class="form-control"  id="edit_date_from" style="border-radius: 5px" name="edit_date_from">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Date Range To</label>
                                    <input type="text" class="form-control" name="edit_date_to" id="edit_date_to" style="border-radius: 5px" value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Total Seat</label>
                                    <input type="text" class="form-control"  id="edit_total_seat" style="border-radius: 5px" name="edit_total_seat">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Seat Fare</label>
                                    <input type="text" class="form-control" name="edit_seat_fare" id="edit_seat_fare" style="border-radius: 5px" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
