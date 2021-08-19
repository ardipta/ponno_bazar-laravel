@extends('backend.master')
@section('content')
    <div class="main-content container-fluid">
        @include('partials.flash_message')
        <section class="section">
            <div class="card">
                <div class="card-header text-center" style="font-weight: bolder; font-size: 20px">
                    Purchase Details
                </div>
                <div class="card-body" style="width:100%; overflow-x:auto;">
                    <table class='align-middle mb-0 table table-borderless table-striped table-hover' id="table1">
                        <thead style="background-color: #4cb320; color: white">
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Journey ID</th>
                            <th class="text-center">From</th>
                            <th class="text-center">To</th>
                            <th class="text-center">Purchase Date</th>
                            <th class="text-center">Journey Date</th>
                            <th class="text-center">Departure Time</th>
                            <th class="text-center">Total Seat</th>
                            <th class="text-center">Fare</th>
                            <th class="text-center">Payment Method</th>
                            <th class="text-center">Journey Status</th>
                            <th class="text-center">Validity</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($purchaseInfo)>0)
                            @foreach($purchaseInfo as $ticket)
                                <tr>
                                    <td class="text-center text-muted">#{{$loop->index+1}}</td>
                                    <td class="text-center">{{$ticket->journey_id}}</td>
                                    <td class="text-center">{{$ticket->from}}</td>
                                    <td class="text-center">{{$ticket->to}}</td>
                                    <td class="text-center">{{$ticket->purchase_date}}</td>
                                    <td class="text-center">{{$ticket->journey_date}}</td>
                                    <td class="text-center">{{$ticket->departure_time}}</td>
                                    <td class="text-center">{{$ticket->number_of_seat}}</td>
                                    <td class="text-center text-success" style="font-weight: bold">{{$ticket->fare}}৳</td>
                                    <td class="text-center">
                                        <div class="badge badge-info" style="background-color: cadetblue">
                                            {{$ticket->payment_method}}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div style="background-color: {{$ticket->journey_status == "confirmed" ? "green" : "red"}}" class="{{$ticket->journey_status == "confirmed" ? "badge badge-success" : "badge badge-danger"}}">{{$ticket->journey_status == "confirmed" ? "Confirmed" : "Pending"}}</div>
                                    </td>
                                    <td class="text-center text-danger">Till, {{$ticket->validity}}</td>
                                    <td>
                                        <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="12">No ticket found</td>
                            </tr>
                        @endif
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
