@extends('public.layouts.master')
<style>
    .recommended-item-control i {
        background: none repeat scroll 0 0 #00BCD4!important;
    }
    .add-to-cart{
        padding: 4px 6px!important;
        font-size: 12px!important;
    }
</style>
@section('content')

    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Features Items</h2>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/product1.jpg') }}" alt="" /></a>
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
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/product2.jpg') }}" alt="" /></a>
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
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/product3.jpg') }}" alt="" /></a>
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
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/product4.jpg') }}" alt="" /></a>
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
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/product5.jpg') }}" alt="" /></a>
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
                        <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/product6.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery1.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery2.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery3.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery4.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery4.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery3.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery2.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery1.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery3.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery4.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery1.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery2.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery1.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery2.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery3.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery4.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery2.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery4.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery3.jpg') }}" alt="" /></a>
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
                                <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/gallery1.jpg') }}" alt="" /></a>
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
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend1.jpg') }}" alt=""/> </a>
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
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend2.jpg') }}" alt=""/> </a>
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
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend3.jpg') }}" alt=""/> </a>
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
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend1.jpg') }}" alt=""/> </a>
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
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend2.jpg') }}" alt=""/> </a>
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
                                    <a href="{{ url('product-details/1') }}"><img src="{{asset('assets/fontend/images/home/recommend3.jpg') }}" alt=""/> </a>
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