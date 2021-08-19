@extends('frontend.users.master')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            @include('partials.flash_message')
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header text-center">
                            Confirm Tickets
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead style="background-image: linear-gradient(to bottom, #00b09b, #96c93d) !important;color: #FFFFFF">
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
                                                <div class="badge badge-info">
                                                    {{$ticket->payment_method}}
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="{{$ticket->journey_status == "confirmed" ? "badge badge-success" : "badge badge-danger"}}">{{$ticket->journey_status == "confirmed" ? "Confirmed" : "Pending"}}</div>
                                            </td>
                                            <td class="text-center text-danger">Till, {{$ticket->validity}}</td>
                                            <td>
                                                <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm" disabled>Download</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="12">No confirm ticket found</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.users.partials.user_footer')
    </div>
@endsection
