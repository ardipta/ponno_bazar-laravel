@extends('frontend.master')
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
                    @include('partials.flash_message')
                    <h3 style="text-align: center">Passenger Details</h3>
                    <hr>
                    <form action="{{route('save_ticket_info')}}" method="POST">
                        @csrf
                        @foreach($confirms as $confirm)
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Name</label>
                                    <input type="text" name="fullName" class="form-control" value="{{auth()->user()->first_name." ".auth()->user()->last_name}}">
                                    <input type="hidden" name="from" class="form-control" value="{{$confirm->from}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone Number</label>
                                    <input name="phone" type="number" class="form-control" value="{{auth()->user()->phone}}">
                                    <input name="to" type="hidden" value="{{$confirm->to}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email Address</label><small> (Optional)</small>
                                    <input name="emailAddress" type="email" class="form-control" placeholder="Enter your email address">
                                    <input name="journey_date" type="hidden" value="{{$journeyDate}}" class="form-control">
                                    <input name="dep_time" type="hidden" value="{{$confirm->departure_time}}" class="form-control">
                                    <input name="seat_no" type="hidden" value="{{$seat_number}}" class="form-control">
                                    <input name="fare" type="hidden" value="{{$total_fare}}" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Coupon</label><small> (Optional)</small>
                                    <input name="coupon" type="text" class="form-control" placeholder="Enter coupon for discount or cashback">
                                </div>
                            </div>
                            @if(auth()->user()->current_balance > 0)
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input class="form-check-input" name="walletBalance" type="checkbox" id="walletBalance" >
                                        <label class="form-check-label" for="agree-faq">Available Wallet Balance BDT <span id="current">{{auth()->user()->current_balance}}</span>. Use Wallet?</label>
                                    </div>
                                </div>
                            @endif
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <button type="submit" style="background-color: #84C639; color: white" class="btn form-control">Confirm</button>
                                </div>
                            </div>
                        @endforeach
                    </form>
                </div>
                <div class="form-row col-md-4">
                    <h3 style="text-align: center">
                        Journey Details
                    </h3>
                    <hr>
                    @foreach($confirms as $confirm)
                        <div style="text-align: center">
                            <span style="font-size: 22px; font-weight: bold">{{$confirm->from}} - {{$confirm->to}}</span><br>
                            <span>{{$confirm->bus_service_name}}</span><br><br>
                            Date of Journey: <span>{{$journeyDate.", ".$confirm->departure_time}}</span><br>
                            Number of Seat: <span id="seat">{{$seat_number}}</span><br>
                            <input type="hidden" value="{{$total_fare}}" id="hiddenFare">
                            Total: ৳ <span id="fare">{{$total_fare}}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-12">
                <h2 class="text-center">Terms & Conditions of Ticket Purchase</h2>
                <div class="container">
                    <ul style="margin-top: 10px;">
                        <li style="list-style-type: square;">পণ্যবাজার থেকে টিকিট কেনার ক্ষেত্রে অবশ্যই টাইম সিডিউল এবং ডেট দেখে কনফার্ম করুন।</li>
                        <li style="list-style-type: square;">টিকেট কেনার পর থেকে ভেলিডিটি টাইম থাকবে 30 দিন।</li>
                        <li style="list-style-type: square;">জার্নির 2 ঘণ্টা আগে সীট কনফার্ম করতে হবে কল সেন্টার  ফোন দিতে হবে।</li>
                        <li style="list-style-type: square;">পণ্যবাজার যেকোনো সময় টাইম শিডিউল পরিবর্তন করতে পারবে। </li>
                        <li style="list-style-type: square;">পণ্যবাজার এর যে কোন ইনফরমেশন জানার জন্য +880 156-808-6107 এই নাম্বারে কল দিতে হবে। </li>
                        <li style="list-style-type: square;">টিকেট ক্যান্সলেশন এবং রিফান্ড পলিসি অ্যাপ্লিকেবিল নয়।</li>
                        <li style="list-style-type: square;">ক্যাশব্যাক এর টাকা আপনার ওয়ালেট এ থাকবে।</li>
                        <li style="list-style-type: square;">জার্নির মিনিমাম এক ঘন্টা আগে কাউন্টারে উপস্থিত থাকতে হবে।</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#walletBalance").change(function() {

            var mainFare =0;
            var currentBalance = $("#current").text();
            var ticketFare = $("#fare").text();
            var hiddenFare = $("#hiddenFare").val();
            if(this.checked) {
                mainFare = parseFloat(ticketFare)-parseFloat(currentBalance);
                if(mainFare<=0){
                    mainFare = 0;
                }
                $("#fare").text(mainFare);
                console.log("Checked "+mainFare);
            }
            else {
                console.log("Unchecked "+hiddenFare);
                $("#fare").text(hiddenFare);
            }
        });
    </script>
@endsection
