<style>
    ul li{
        list-style: none;
    }
</style>
<!--- header ---->
<div class="header">
    <div class="container">
        <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
            <a href="{{route('index')}}"><img src="{{asset('images/logo1.webp')}}" style="max-width: 100%; height: 50px"></a>
        </div>
        <div class="bus wow fadeInUp animated" data-wow-delay=".5s">
            <a href="#busTicket" class="buses active">BUSES</a>
            <a href="#">HOTELS</a>
        </div>
        <div class="lock fadeInDown animated" data-wow-delay=".5s">
            <li class="fadeInDown animated" style="margin-top: 7px">
                <a href="#" style="text-decoration: none; font-weight: bold" id="cart"><i class="fa fa-shopping-cart"></i> Shopping Cart <span class="badge">0</span></a>
            </li>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /header ---->

<div class="container">
    <div class="shopping-cart" style="display: none; border: 1px solid black">
        <div class="shopping-cart-header">
            <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">0</span>
            <div class="shopping-cart-total">
                <span class="lighter-text">coming soon..</span>
{{--                <span class="lighter-text">Total:</span>--}}
{{--                <span class="main-color-text">$2,229.97</span>--}}
            </div>
        </div> <!--end shopping-cart-header -->

        <ul class="shopping-cart-items">
{{--            <li class="clearfix">--}}
{{--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />--}}
{{--                <span class="item-name">Sony DSC-RX100M III</span>--}}
{{--                <span class="item-price">$849.99</span>--}}
{{--                <span class="item-quantity">Quantity: 01</span>--}}
{{--            </li>--}}

{{--            <li class="clearfix">--}}
{{--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg" alt="item1" />--}}
{{--                <span class="item-name">KS Automatic Mechanic...</span>--}}
{{--                <span class="item-price">$1,249.99</span>--}}
{{--                <span class="item-quantity">Quantity: 01</span>--}}
{{--            </li>--}}

{{--            <li class="clearfix">--}}
{{--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg" alt="item1" />--}}
{{--                <span class="item-name">Kindle, 6" Glare-Free To...</span>--}}
{{--                <span class="item-price">$129.99</span>--}}
{{--                <span class="item-quantity">Quantity: 01</span>--}}
{{--            </li>--}}
        </ul>

        <a href="#" class="btn" style="background-color: #34ad00; color: white">Checkout</a>
    </div> <!--end shopping-cart -->
</div> <!--end container -->

<script>
    (function(){
        $("#cart").on("click", function() {
            $(".shopping-cart").fadeToggle( "fast");
        });
    })();
</script>
