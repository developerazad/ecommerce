<style>
    .header-middle .container .row {
        border-bottom: 0px solid #f5f5f5;
    }
    .shop-menu ul li a {
        background: none;
        color: #ffffff;
    }
    .shop-menu ul li a:hover {
        color:#2b2f2f;
        background:none;
    }
</style>
<div class="header-middle" style="background-color: #0A27A9;"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo pull-left">
                    <a href="{{ url('/') }}"><img src="{{asset('assets/fontend/images/home/logo.png')}}" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="{{ url('carts') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        <li><a href="{{ url('customer-login') }}"><i class="fa fa-lock"></i> Login</a></li>
                    </ul>
                </div>
            </div>
            {{--<div class="col-sm-3">--}}
                {{--<div class="search_box pull-right">--}}
                    {{--<input type="text" placeholder="Search">--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div><!--/header-middle-->