@extends('frontend.users.master')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <a href="{{route('index')}}">
                                <i class="pe-7s-home icon-gradient bg-mean-fruit">
                                </i>
                            </a>
                        </div>
                        <div>Ponnobazar User Dashboard
                            <div class="page-title-subheading">
                                here, you can show your wallet balance.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Orders</div>
                                <div class="widget-subheading">For all time</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{count($ticket_info)}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Account Balance</div>
                                <div class="widget-subheading">Available current balance</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>BDT {{number_format((float)auth()->user()->current_balance, 2, '.', '')}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Cashback Balance</div>
                                <div class="widget-subheading">Total cashback balance</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>BDT {{number_format((float)auth()->user()->cashback_balance, 2, '.', '')}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-premium-dark">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Products Sold</div>
                                <div class="widget-subheading">Revenue streams</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning"><span>$14M</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">
                            Purchase History
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">From</th>
                                    <th class="text-center">To</th>
                                    <th class="text-center">Journey Date</th>
                                    <th class="text-center">Issue Date</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($ticket_info)<0)
                                    @foreach($ticket_info as $ticket)
                                        <tr>
                                            <td class="text-center text-muted">#{{$loop+1}}</td>
                                            <td class="text-center">{{$ticket->bus_service_name}}</td>
                                            <td class="text-center">{{$ticket->from}}</td>
                                            <td class="text-center">{{$ticket->to}}</td>
                                            <td class="text-center">{{$ticket->date_range_from}}</td>
                                            <td class="text-center">{{$ticket->date_range_from}}</td>
                                            <td class="text-center">
                                                <div class="{{$ticket->status == "confirmed" ? "badge badge-success" : "badge badge-danger"}}">{{$ticket->status == "confirmed" ? "Confirmed" : "Pending"}}</div>
                                            </td>
                                            <td>
                                                <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Download</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="7">No data found</td>
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
