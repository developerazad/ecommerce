@extends('public.layouts.master')
<style>
    .recommended-item-control i {
        background: none repeat scroll 0 0 #00BCD4!important;
    }
    .add-to-cart{
        padding: 4px 6px!important;
        font-size: 12px!important;
    }
    .productinfo img {
        width: 100px!important;
        height: 115px!important;
    }
</style>
@section('content')

    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Features Items</h2>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/best_1.png') }}" alt="" /></a>
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/best_2.png') }}" alt="" /></a>
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/best_3.png') }}" alt="" /></a>
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/best_4.png') }}" alt="" /></a>
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/new.png') }}" class="new" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/best_5.png') }}" alt="" /></a>
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/sale.png') }}" class="new" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/best_6.png') }}" alt="" /></a>
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>

                </div>
            </div>
        </div>

    </div><!--features_items-->

    <div class="category-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
                <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
                <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
                <li><a href="#kids" data-toggle="tab">Kids</a></li>
                <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="tshirt" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_1.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_2.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_3.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_4.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="blazers" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_5.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_6.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_7.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_8.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="sunglass" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_1.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_2.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_3.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_4.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="kids" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_5.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_6.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_7.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_8.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="poloshirt" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_1.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_2.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_3.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/featured_4.png') }}" alt="" /></a>
                                <h2>$56</h2>
                                <p>Easy Polo Black Edition</p>
                                <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/category-tab-->

    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">recommended items</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/new_1.jpg') }}" alt=""/> </a>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/new_2.jpg') }}" alt=""/> </a>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/new_3.jpg') }}" alt=""/> </a>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
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
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/new_4.jpg') }}" alt=""/> </a>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/new_5.jpg') }}" alt=""/> </a>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/new_6.jpg') }}" alt=""/> </a>
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="{{ url('product-details/1') }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
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