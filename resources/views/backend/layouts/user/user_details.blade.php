@extends('backend.master')
@section('content')
    <div class="main-content container-fluid">
        @include('partials.flash_message')
        <section class="section">
            <div class="card">
                <div class="card-header text-center" style="font-weight: bolder; font-size: 20px">
                    User Details
                </div>
                <div class="card-body" style="width:100%; overflow-x:auto;">
                    <table class='align-middle mb-0 table table-borderless table-striped table-hover' id="table1">
                        <thead style="background-color: #4cb320; color: white">
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">First Name</th>
                            <th class="text-center">Last Name</th>
                            <th class="text-center">Mobile Number</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Date of Birth</th>
                            <th class="text-center">Current Balance</th>
                            <th class="text-center">Total Cashback Balance</th>
{{--                            <th class="text-center">Action</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($userInfo)>0)
                            @foreach($userInfo as $user)
                                <tr>
                                    <td class="text-center text-muted">#{{$loop->index+1}}</td>
                                    <td class="text-center">{{$user->first_name}}</td>
                                    <td class="text-center">{{$user->last_name}}</td>
                                    <td class="text-center">{{$user->phone}}</td>
                                    <td class="text-center">{{$user->gender}}</td>
                                    <td class="text-center">{{$user->date_of_birth}}</td>
                                    <td class="text-center">
                                        <div style="background-color: #0b5885" class="badge badge-success">
                                            BDT {{number_format((float)$user->current_balance, 2, '.', '')}}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div style="background-color: #0b5885" class="badge badge-success">
                                            BDT {{$user->cashback_balance}}
                                        </div>
                                    </td>
{{--                                    <td>--}}
{{--                                        <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Edit</button>--}}
{{--                                    </td>--}}
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="12">No user found</td>
                            </tr>
                        @endif
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
