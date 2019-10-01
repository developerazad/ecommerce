<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Shop Care</title>
    <link href="{{ asset('assets/fontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontend/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{URL::TO('assets/fontend/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::TO('assets/fontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::TO('assets/fontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::TO('assets/fontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::TO('assets/fontend/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->
<style>
    @if(Request::is('product-details/1'))
        .left-sidebar h2{
            margin-top: 30px;
        }
    @endif
     h2.title,
    .productinfo h2,
    .left-sidebar h2,
    .brands_products h2,
    .product-information span span  {
        color: #444c50;
    }
    .add-to-cart,
    .breadcrumbs .breadcrumb li a,
    .cart,
    .view-product h3 {
        background: #00BCD4;
        color: #f9f9f9;
    }
    .breadcrumbs .breadcrumb li a:after{
        border-color: transparent transparent transparent #00BCD4;
    }
</style>
<body>
<header id="header"><!--header-->

    @include('public.inc.headerMiddle')

</header><!--/header-->

@if(Request::is('/'))
    @include('public.inc.slider')
@endif

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    @include('public.inc.category')
                    @include('public.inc.brand')
                    @include('public.inc.priceRange')
                </div>
            </div>

            <!-- main dynamic content -->
            <div class="col-sm-9 padding-right">
                @yield('content')
            </div>
            <!--/. main content -->
        </div>
    </div>
</section>

<footer id="footer"><!--Footer-->
    @include('public.inc.footerWidget')
    @include('public.inc.footerBottom')
</footer><!--/Footer-->


<script src="{{ asset('assets/fontend/js/jquery.js') }}"></script>
<script src="{{ asset('assets/fontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/fontend/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/fontend/js/price-range.js') }}"></script>
<script src="{{ asset('assets/fontend/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('assets/fontend/js/main.js') }}"></script>
</body>
</html>