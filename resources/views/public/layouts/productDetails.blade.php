@extends('public.layouts.master')
<style>

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
                    <img src="{{ asset('uploads/products/'.$product->product_photo) }}" alt="product-photo">
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
                    <a href="#"><img src="{{ asset('assets/fontend/images/product-details/new.jpg') }}" class="newarrival" alt=""></a>
                    <h2>{{ $product->product_name }}</h2>
                    <p>Product Code: {{ $product->product_code }}</p>
                    <img src="{{ asset('assets/fontend/images/product-details/rating.png') }}" alt="Rating">
                    <span>
									<span style="font-size: 25px;">${{ $product->product_price }} </span>
									<label>Quantity:</label>
									<input type="number" class="qty" name="qty" value="1" min="1" max="10">
                                    <input type="hidden" class="product-id" value="{{ $product->product_id }}">
									<button type="button" class="btn btn-default cart add-to-cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
                    <p><b>Availability:</b> In Stock</p>
                    <p><b>Condition:</b> New</p>
                    <p><b>Brand:</b> {{ $product->brand_name }}</p>
                    <a href="#"><img src="{{ asset('assets/fontend/images/product-details/share.png') }}" class="share img-responsive" alt=""></a>
                </div><!--/product-information-->
            </div>
        </div><!--/product-details-->

    </div>
    <div class="recommended_items"><!--related_items-->
        <h2 class="title text-center">Related Items</h2>
        @foreach($relatedProducts as $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <a href="{{ url('product-details/'.$product->product_id) }}"><img src="{{asset('uploads/products/'.$product->product_photo) }}" alt="" /></a>
                            <h2>${{ $product->product_price }}</h2>
                            <p>{{ $product->product_name }}</p>
                            <a href="{{ url('product-details/'.$product->product_id) }}" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>View Details</a>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach

    </div><!--/related_items-->

@endsection
