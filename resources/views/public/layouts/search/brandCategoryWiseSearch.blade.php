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
    .features_items{
        margin-top: 30px;
    }
</style>
@section('content')

    @if( count($products) > 0)
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Search Result For <span style="color: red">{{ $products[0]->brand_name }}</span></h2>
            @foreach($products as $product)
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
    </div><!--features_items-->
    @else
    <div class="features_items">
        <h4 class="text-center">Sorry! No Products were found.</h4>
    </div>
    @endif

@endsection