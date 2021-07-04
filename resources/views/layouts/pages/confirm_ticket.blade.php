@extends('layouts.pages.master')
@section('content')
    <div class=" container container-md-fluid ">
        <div class="row ">
            <div class="col-auto col-md-10 ">
                <nav aria-label="breadcrumb " class="second ">
                    <ol class="breadcrumb indigo lighten-6 first shadow-lg px-md-4">
                        <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-2">home</span></a></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-2"></span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-2">Search Result</span></a></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-2"></span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-2">Trip Info</span></a></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-2"></span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span>Confirm Ticket</span></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid confirmPage">
        <div class="row">
            <div class="col-md-12" style="margin: 20px">
                <div class="form-row col-md-8">
                    <h3 style="text-align: center">Passenger Details</h3>
                    <hr>
                    <form action="{{route('save_ticket_info')}}" method="POST">
                        @csrf
                        @foreach($confirms as $confirm)
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="fullName" class="form-control" value="{{auth()->user()->first_name." ".auth()->user()->last_name}}">
                                    <input type="text" name="from" style="display: none" class="form-control" value="{{$confirm->from}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone Number</label>
                                    <input name="phone" type="number" class="form-control" value="{{auth()->user()->phone}}">
                                    <input name="to" type="text" style="display: none" value="{{$confirm->to}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Gender</label>
                                    <input type="text" name="gender" class="form-control" value="{{auth()->user()->gender}}">
                                    <input name="bus_service" style="display: none" type="text" value="{{$confirm->bus_service_name}}" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email Address</label>
                                    <input name="emailAddress" type="email" class="form-control" placeholder="Enter your email address">
                                    <input name="date_from" type="text" style="display: none" value="{{$confirm->date_range_from}}" class="form-control">
                                    <input name="dep_time" type="text" style="display: none" value="{{$confirm->departure_time}}" class="form-control">
                                    <input name="seat_no" type="text" style="display: none" value="{{$seat_number}}" class="form-control">
                                    <input name="fare" type="text" style="display: none" value="{{$total_fare}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <button type="submit" style="background-color: #84C639; color: white" class="btn form-control">Confirm</button>
                                </div>
                            </div>
                        @endforeach
                    </form>
                </div>
                <div class="form-row col-md-4">
                    <h3>
                        Journey Details
                    </h3>
                    <hr>
                    @foreach($confirms as $confirm)
                        <span style="font-size: 22px; font-weight: bold">{{$confirm->from}} - {{$confirm->to}}</span><br>
                        <span>{{$confirm->bus_service_name}}</span><br><br>
                        Date of Journey: <span>{{$confirm->date_range_from.", ".$confirm->departure_time}}</span><br>
                        Number of Seat: <span id="fare">{{$seat_number}}</span><br>
                        Total: ৳ <span id="fare">{{$total_fare}}</span>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-12">
                <h2 class="text-center">Terms & Conditions of Ticket Purchase</h2>
                <div class="container">
                    <ul style="margin-top: 10px">
                        <li>পণ্যবাজার থেকে টিকিট কেনার ক্ষেত্রে অবশ্যই টাইম সিডিউল এবং ডেট দেখে কনফার্ম করুন।</li>
                        <li>টিকেট কেনার পর থেকে ভেলিডিটি টাইম থাকবে 30 দিন।</li>
                        <li>জার্নির 2 ঘণ্টা আগে সীট কনফার্ম করতে হবে কল সেন্টার  ফোন দিতে হবে।</li>
                        <li>পণ্যবাজার যেকোনো সময় টাইম শিডিউল পরিবর্তন করতে পারবে। </li>
                        <li>পণ্যবাজার এর যে কোন ইনফরমেশন জানার জন্য +880 156-808-6107 এই নাম্বারে কল দিতে হবে। </li>
                        <li>টিকেট ক্যান্সলেশন এবং রিফান্ড পলিসি অ্যাপ্লিকেবিল নয়।</li>
                        <li>ক্যাশব্যাক এর টাকা আপনার ওয়ালেট এ থাকবে।</li>
                        <li>জার্নির মিনিমাম এক ঘন্টা আগে কাউন্টারে উপস্থিত থাকতে হবে।</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
