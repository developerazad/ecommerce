<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
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

<body>
<header id="header"><!--header-->
    @include('inc.headerTop')

    @include('inc.headerMiddle')

    @include('inc.headerBottom')
</header><!--/header-->

@include('inc.slider')

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    @include('inc.category')
                    @include('inc.brand')
                    @include('inc.priceRange')
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
    @include('inc.footerTop')
    @include('inc.footerWidget')
    @include('inc.footerBottom')
</footer><!--/Footer-->


<script src="{{ asset('assets/fontend/js/jquery.js') }}"></script>
<script src="{{ asset('assets/fontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/fontend/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/fontend/js/price-range.js') }}"></script>
<script src="{{ asset('assets/fontend/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('assets/fontend/js/main.js') }}"></script>
</body>
</html>