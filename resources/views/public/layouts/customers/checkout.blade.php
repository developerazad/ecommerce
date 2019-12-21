@extends('public.layouts.master')
<style>
    .cart_product {
        display: block;
        margin: 10px -25px 10px 25px!important;
    }
</style>

@section('content')

    <section id="cart_items">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Order</a></li>
                    <li class="active">Checkout</li>
                </ol>
            </div>
    </section>
    <section id="do_action">
            <div class="heading">
                <h3>Please provide the below information</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row" style="margin:0!important;">
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total <span>${{ Cart::subtotal() }}</span></li>
                        <li>Tax <span>${{ Cart::tax() }}</span></li>
                        <li>Shipping Cost <span>Free</span></li>
                        <li>Total <span>${{ Cart::total() }}</span></li>
                    </ul>
                    <a class="btn btn-default update" href="{{ url('carts') }}">Back</a>
                    <a class="btn btn-default check_out" href="{{ url('/checkout') }}">Confirm</a>
                </div>
            </div>
    </section>

@endsection


