@extends('public.layouts.master')
<style>
    .breadcrumbs .breadcrumb {
        margin-top: 22px;
        margin-bottom: 20px!important;
    }
</style>
@section('content')

    <section id="cart_items">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Product Details</li>
            </ol>
        </div>
    </section>
    <div class="padding-right">
        <div class="product-details"><!--product-details-->
            <div class="col-sm-5">
                <div class="view-product">
                    <a href="{{ url('product-details/1') }}"><img src="{{ asset('assets/fontend/images/product-details/1.jpg') }}" alt=""></a>
                    <h3>ZOOM</h3>
                </div>
                <div id="similar-product" class="carousel slide" data-ride="carousel">

                    <!-- Controls -->
                    <a class="left item-control" href="#similar-product" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-product" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
            <div class="col-sm-7">
                <div class="product-information"><!--/product-information-->
                    <a href="{{ url('product-details/1') }}"><img src="{{ asset('assets/fontend/images/product-details/new.jpg') }}" class="newarrival" alt=""></a>
                    <h2>Anne Klein Sleeveless Colorblock Scuba</h2>
                    <p>Web ID: 1089772</p>
                    <a href="{{ url('product-details/1') }}"><img src="{{ asset('assets/fontend/images/product-details/rating.png') }}" alt=""></a>
                    <span>
									<span>US $59</span>
									<label>Quantity:</label>
									<input type="text" value="3">
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
                    <p><b>Availability:</b> In Stock</p>
                    <p><b>Condition:</b> New</p>
                    <p><b>Brand:</b> E-SHOPPER</p>
                    <a href="{{ url('product-details/1') }}"><img src="{{ asset('assets/fontend/images/product-details/share.png') }}" class="share img-responsive" alt=""></a>
                </div><!--/product-information-->
            </div>
        </div><!--/product-details-->

    </div>
    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">recommended items</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend1.jpg') }}" alt="" />
                     </a>               <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend2.jpg') }}" alt="" />
                     </a>               <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend3.jpg') }}" alt="" />
                     </a>               <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend1.jpg') }}" alt="" />
                     </a>               <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend2.jpg') }}" alt="" />
                     </a>               <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend3.jpg') }}" alt="" />
                     </a>               <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div><!--/recommended_items-->

@endsection