@extends('frontend.master')
@section('content')
    <div class=" container container-md-fluid ">
        <div class="row ">
            <div class="col-auto col-md-10 ">
                <nav aria-label="breadcrumb " class="second ">
                    <ol class="breadcrumb indigo lighten-6 first shadow-lg px-md-4">
                        <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-2">home</span></a></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-2"></span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                        <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span>Contact Us</span></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="agent">
        <div class="container">
            <div class="col-md-6 agent-left wow fadeInDown animated" data-wow-delay=".5s">
                <div class="ag-bt">
                    <h3>Contact Us</h3>
                </div>
                <p>Submit details we will call you back</p>
                <form>
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                    <input type="text" placeholder="Phone">
                    <textarea placeholder="Message"></textarea>
                    <div class="sub">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <div class="col-md-6 agent-right wow fadeInUp animated" data-wow-delay=".5s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.317878035944!2d90.41216731538454!3d23.736041295240668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85f07bdff21%3A0xa74a10991ec20372!2s27%20Naya%20Paltan%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1625300091376!5m2!1sen!2sbd" width="500" height="375" style="border:0;" allowfullscreen=""></iframe>
                <h3>Contact & Address</h3>
                <p><i class="fa fa-location-arrow"></i> 27 (3rd Floor), Nayapaltan, Dhaka-1000</p>
                <p><i class="fa fa-envelope"></i><a href="mailto:example@email.com"> info@ponnobazar.digital</a></p>
                <p><i class="fa fa-phone"></i> +880 156-808-6107</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
