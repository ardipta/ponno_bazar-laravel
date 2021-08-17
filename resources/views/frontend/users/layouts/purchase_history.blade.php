@extends('frontend.users.master')
@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }
        th {
            background: #333;
            color: white;
            font-weight: bold;
        }
        td, th {
            padding: 6px;
            border: 1px solid #ccc;
            text-align: center;
        }
    </style>
    <div class="cd-content-wrapper">
        <h2 style="font-weight: bold; text-align: center">Ticket Purchase History</h2>
        <!--  Inverse table start -->
        <div class="row" id="table-inverse">
            <div class="col-12" style="overflow-x:auto;">
                <table>
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
                    @if(isset($ticket_info)<0)
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
                    @else
                        <tr>
                            <td colspan="9">No data found</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Inverse table end -->
        @include('frontend.users.partials.user_footer')
    </div>
@endsection
