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
                        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
                        @if(Session::get('customer_name'))
                        <li><a href="{{ url('account') }}"><i class="fa fa-user"></i> Account</a></li>
                        @endif

                        @if(Cart::count() > 0)
                        <li><a class="{{ Request::is('carts')?'active':'' }}" href="{{ url('carts') }}"><i class="fa fa-shopping-cart"></i> Cart <sup>{{ Cart::count() }}</sup></a></li>
                        @else
                        <li><a class="cart-empty" href="#"><i class="fa fa-shopping-cart"></i> Cart <sup>{{ Cart::count() }}</sup></a></li>
                        @endif

                        @if(Session::get('customer_name'))
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();logoutMessage()" role="menuitem" tabindex="-1"><i class="fa fa-unlock"></i> Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                        <li><a href="{{ url('customer-login') }}"><i class="fa fa-lock"></i> Login</a></li>
                        @endif
                    </ul>
                </div>
            </div>
{{--            <div class="col-sm-3">--}}
{{--                <div class="search_box pull-right">--}}
{{--                    <input type="text" placeholder="Search">--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div><!--/header-middle-->
