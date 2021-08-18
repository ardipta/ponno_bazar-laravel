@extends('backend.master')
@section('content')
    <div class="main-content container-fluid">
        @include('partials.flash_message')
        <div class="page-title">
            <h3>Manage Coupons</h3>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header text-center" style="font-weight: bolder; font-size: 20px">
                    Bus Service Details
                </div>
                <div class="card-body" style="width:100%; overflow-x:auto;">
                    <table class='align-middle mb-0 table table-borderless table-striped table-hover'>
                        <thead style="background-color: #4cb320; color: white">
                        <tr>
                            <th>#</th>
                            <th>Coupon Text</th>
                            <th>Type</th>
                            <th>Value</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($coupons)>0)
                            @foreach($coupons as $coupon)
                                <tr style="color: black">
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$coupon->coupon_text}}</td>
                                    <td>{{$coupon->type}}</td>
                                    <td>{{$coupon->type=="percentage" ? $coupon->value.'%' : 'BDT '.$coupon->value}}</td>
                                    <td>
                                        <form action="{{route('admin.coupons.destroy', $coupon->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button title="Delete" type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
    {{--                            <div class="modal fade" id="delete{{$coupon->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--                                <div class="modal-dialog" role="document">--}}
    {{--                                    <div class="modal-content">--}}
    {{--                                        <div class="modal-header">--}}
    {{--                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
    {{--                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                                                <span aria-hidden="true">&times;</span>--}}
    {{--                                            </button>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="modal-body">--}}
    {{--                                            --}}
    {{--                                        </div>--}}
    {{--                                        <div class="modal-footer">--}}
    {{--                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
                            @endforeach
                        @else
                            <tr style="color: black; font-width: bold; text-align: center">
                                <td colspan="5">No Coupons Found!!</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
