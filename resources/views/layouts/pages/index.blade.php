<style>
    @media (min-width: 1650px) {
        .carousel-inner .item img{
            width: 1904px;
            height: 765px;
        }
    }
</style>
@extends('layouts.pages.master')
@section('content')
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{asset('images/banner_bus.webp')}}" class="img-fluid" alt="...">
            </div>
            <div class="item">
                <img src="{{asset('images/banner_bus2.webp')}}" class="img-fluid" alt="...">
            </div>
            <div class="item">
                <img src="{{asset('images/banner_bus3.webp')}}" class="img-fluid" alt="...">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="col-md-5 col-xs-12 col-sm-12 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="col">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{asset('images/inside_bus.webp')}}" style="height: 180px; max-width: 100%">
                                </div>
                                <div class="item">
                                    <img src="{{asset('images/inside_bus2.webp')}}" style="height: 180px; max-width: 100%">
                                </div>
                                <div class="item">
                                    <img src="{{asset('images/inside_bus3.webp')}}" style="height: 180px; max-width: 100%">
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        {{--                        <img src="{{asset('images/inside_bus.webp')}}" class="img-thumbnail" style="height: 180px; max-width: 100%; border-radius: 5px; padding: 5px; margin-bottom: 5px">--}}
                    </div>
                </div>
                <div class="row" style="margin-top:10px">
                    <div class="col-lg-4 col-xs-4">
                        <img src="{{asset('images/inside_bus.webp')}}" class="img-thumbnail" style="height: 80px; max-width: 100%; padding: 5px; border-radius: 5px">
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <img src="{{asset('images/inside_bus2.webp')}}" class="img-thumbnail" style="height: 80px; max-width: 100%; padding: 5px; border-radius: 5px">
                    </div>
                    <div class="col-lg-4 col-xs-4">
                        <img src="{{asset('images/inside_bus3.webp')}}" class="img-thumbnail"  style="height: 80px; max-width: 100%; padding: 5px; border-radius: 5px">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-xs-12 col-sm-12 bann-info wow fadeInRight animated" data-wow-delay=".5s" id="busTicket">
            <form action="{{ route('search_result') }}" method="GET">
                {{ csrf_field() }}
                <h2>Buy Ticket Now!!</h2>
                <div class="ban-top">
                    <div class="bnr-left">
                        <label class="inputLabel">From</label>
                        <input class="city" type="text" placeholder="Enter a city" name="from" list="from" autocomplete="off" required=>
                        <datalist class="form-control" id="from" style="display: none" >
                            @foreach ($buses_from as $bus)
                                <option value="{{$bus->from}}"></option>
                            @endforeach
                        </datalist>
                    </div>
                    <div class="bnr-left">
                        <label class="inputLabel">To</label>
                        <input class="city" type="text" placeholder="Enter a city" name="to" list="to" autocomplete="off" required=>
                        <datalist class="form-control" id="to" style="display: none" >
                            @foreach ($buses_to as $bus_to)
                                <option value="{{$bus_to->to}}"></option>
                            @endforeach
                        </datalist>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="ban-bottom">
                    <div class="bnr-right">
                        <label class="inputLabel">Date of Journey</label>
                        <input type="date" name="date_range_from" placeholder="Select Date" style="width: 95%;color: #9E9E9E;font-size: 14px;padding: 3px 10px;border: 1px solid #9E9E9E;margin-top: 10px;">
                    </div>
                    <div class="bnr-right">
                        <label class="inputLabel">Date of Return<span class="opt">&nbsp;(Optional)</span></label>
                        <input type="date" style="width: 95%;color: #9E9E9E;font-size: 14px;padding: 3px 10px;border: 1px solid #9E9E9E;margin-top: 10px;">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="sear">
                    <form action="bus.html">
                        <button class="seabtn" type="submit">Search Buses</button>
                    </form>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="container" style="margin-bottom: 10px">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-6" style="padding: 20px">
                <div class="blog-card spring-fever">
                    <div class="title-content">
                        <h3><a href="#">Men's Fashion</a></h3>
                        <div class="intro"> <a href="#">Category</a> </div>
                    </div>
                    <div class="color-overlay"></div>
                </div><!-- /.blog-card -->
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6" style="padding: 20px">
                <div class="blog-card spring-fever">
                    <div class="title-content">
                        <h3><a href="#">Woman's Fashion</a></h3>
                        <div class="intro"> <a href="#">Category</a> </div>
                    </div>
                    <div class="color-overlay"></div>
                </div><!-- /.blog-card -->
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6" style="padding: 20px">
                <div class="blog-card spring-fever">
                    <div class="title-content">
                        <h3><a href="#">Grocery & Food</a></h3>
                        <div class="intro"> <a href="#">Category</a> </div>
                    </div>
                    <div class="color-overlay"></div>
                </div><!-- /.blog-card -->
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6" style="padding: 20px">
                <div class="blog-card spring-fever">
                    <div class="title-content">
                        <h3><a href="#">Electronics</a></h3>
                        <div class="intro"> <a href="#">Category</a> </div>
                    </div>
                    <div class="color-overlay"></div>
                </div><!-- /.blog-card -->
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6" style="padding: 20px">
                <div class="blog-card spring-fever">
                    <div class="title-content">
                        <h3><a href="#">Gadgets</a></h3>
                        <div class="intro"> <a href="#">Category</a> </div>
                    </div>
                    <div class="color-overlay"></div>
                </div><!-- /.blog-card -->
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6" style="padding: 20px">
                <div class="blog-card spring-fever">
                    <div class="title-content">
                        <h3><a href="#">Automobile</a></h3>
                        <div class="intro"> <a href="#">Category</a> </div>
                    </div>
                    <div class="color-overlay"></div>
                </div><!-- /.blog-card -->
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6" style="padding: 20px">
                <div class="blog-card spring-fever">
                    <div class="title-content">
                        <h3><a href="#">Kids Item</a></h3>
                        <div class="intro"> <a href="#">Category</a> </div>
                    </div>
                    <div class="color-overlay"></div>
                </div><!-- /.blog-card -->
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-6" style="padding: 20px">
                <div class="blog-card spring-fever">
                    <div class="title-content">
                        <h3><a href="#">Pet Food</a></h3>
                        <div class="intro"> <a href="#">Category</a> </div>
                    </div>
                    <div class="color-overlay"></div>
                </div><!-- /.blog-card -->
            </div>
        </div>
    </div>

    <div class="container bootdey">
        <div class="col-md-3">
            <section class="panel">
                <div class="panel-body">
                    <input type="text" placeholder="Keyword Search" class="form-control" />
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    Category
                </header>
                <div class="panel-body">
                    <ul class="nav prod-cat">
                        <li>
                            <a href="#" class="active"><i class="fa fa-angle-right"></i> Dress</a>
                            <ul class="nav">
                                <li class="active"><a href="#">- Shirt</a></li>
                                <li><a href="#">- Pant</a></li>
                                <li><a href="#">- Shoes</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i> Bags &amp; Purses</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i> Beauty</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i> Coat &amp; Jacket</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i> Jeans</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i> Jewellery</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i> Electronics</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i> Sports</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i> Technology</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i> Watches</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i> Accessories</a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    Price Range
                </header>
                <div class="panel-body sliders">
                    <div id="slider-range" class="slider"></div>
                    <div class="slider-info">
                        <span id="slider-range-amount"></span>
                    </div>
                </div>
            </section>
            <section class="panel">
                <header class="panel-heading">
                    Filter
                </header>
                <div class="panel-body">
                    <form role="form product-form">
                        <div class="form-group">
                            <label>Brand</label>
                            <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                                <option>Wallmart</option>
                                <option>Catseye</option>
                                <option>Moonsoon</option>
                                <option>Textmart</option>
                            </select>
                            <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">Wallmart</span></span>
                        </div>
                        <div class="form-group">
                            <label>Color</label>
                            <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                                <option>White</option>
                                <option>Black</option>
                                <option>Red</option>
                                <option>Green</option>
                            </select>
                            <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">White</span></span>
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                                <option>Extra Large</option>
                            </select>
                            <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">Small</span></span>
                        </div>
                        <button class="btn btn-primary" type="submit">Filter</button>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-md-9">
            <section class="panel">
                <div class="panel-body">
                    <div class="pull-right">
                        <ul class="pagination pagination-sm pro-page-list">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </section>

            <div class="row product-list">
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/FFB6C1/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/6495ED/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/FF7F50/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/00BFFF/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/00CED1/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/9400D3/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/FFD700/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/ADD8E6/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/20B2AA/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/3CB371/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/FFB6C1/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/C71585/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/191970/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/87CEEB/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-6">
                    <section class="panel">
                        <div class="pro-img-box">
                            <img src="https://via.placeholder.com/250x220/FFB6C1/000000" alt="" />
                            <a href="#" class="adtocart">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="panel-body text-center">
                            <h4>
                                <a href="#" class="pro-title">
                                    Coming Soon..
                                </a>
                            </h4>
                            <p class="price">৳300.00</p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- write us -->
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body modal-spa">
                        <div class="writ">
                            <h4>HOW CAN WE HELP YOU</h4>
                            <ul>
                                <li class="na-me">
                                    <input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                </li>
                                <li class="na-me">
                                    <input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                </li>
                                <li class="na-me">
                                    <input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
                                </li>
                                <li class="na-me">
                                    <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                                        <option value="null">Select Issue</option>
                                        <option value="null">Booking Issues</option>
                                        <option value="null">Bus Cancellation</option>
                                        <option value="null">Refund</option>
                                        <option value="null">Wallet</option>
                                    </select>
                                </li>
                                <li class="na-me">
                                    <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                                        <option value="null">Select Issue</option>
                                        <option value="null">Booking Issues</option>
                                        <option value="null">Bus Cancellation</option>
                                        <option value="null">Refund</option>
                                        <option value="null">Wallet</option>
                                    </select>
                                </li>
                                <li class="descrip">
                                    <input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write Description';}" required="">
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                            <div class="sub-bn">
                                <form>
                                    <button class="subbtn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //write us -->
@endsection
