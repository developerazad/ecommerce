@extends('public.layouts.master')
<style>
    .cart_product {
        display: block;
        margin: 10px -25px 10px 25px!important;
    }
    .update, .check_out{
        margin-left: 0!important;
        margin-top: 0!important;
    }
    .check_out{
        margin-left: 20px!important;
    }
    .shopper-info p{
        font-size: 15px!important;
    }
    .shopper-info > form > select{
        background: #F0F0E9;
        border: 0 none;
        margin-bottom: 10px;
        padding: 10px;
        width: 100%;
        font-weight: 300;
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
                <p>Please provide your information to place order or <a href="{{ url('customer-login') }}">login here </a>if you are already a member</p>
            </div>
            <div class="row" style="margin:0!important;">
                <div class="shopper-info">
                    <form action="{{ url('order-submit') }}" method="post">
                        @csrf
                        <div class="heading">
                            <h3>User Information</h3>
                        </div>

                            <input type="text" placeholder="Full Name" name="customer_name" value="" required>
                            <input type="email" placeholder="E-mail" name="customer_email" value="" required>
                            <input type="password" placeholder="Chose a Password" name="customer_pwd" required>
                            <input type="text" placeholder="Full Address" name="customer_address" value="" required>
                            <select name="customer_district" required>
                                <option value="">-District-</option>
                                <option value="1">Dhaka</option>
                                <option value="2">Rajshahi</option>
                                <option value="3">Rangpur</option>
                            </select>
                            <input type="text" placeholder="Phone" name="customer_phone" value="" required>
                        <div class="heading">
                            <h3>Shipping Information</h3>
                        </div>
                        <p>
                            <input type="checkbox" name="shipping_method" class="shipping_method" value="insight" checked>
                            Regular Home Delivery within 1 - 3 days in Dhaka City, Free</p>
                        <p>
                            <input type="checkbox" name="shipping_method" class="shipping_method" value="outside">
                            Regular Home Delivery within 1 - 3 days outside of Dhaka City, 200BDT</p>
                        <p>
                            <input type="checkbox" name="shipping_method" class="shipping_method" value="express">
                            Express Home Delivery on same day in Dhaka City, 200BDT</p>

                        <div class="heading">
                            <h3>Payment Method</h3>
                        </div>
                        <p><input type="checkbox" name="payment_method" class="payment_method" value="cod" checked> Cash On Delivery(COD)</p>
                        <p><input type="checkbox" name="payment_method" class="payment_method" value="bkash"> Pay With bKash</p>

                        <br>
                        <p><input type="checkbox" name="agree_fg" checked> I agree with your <a href="">terms and conditions</a>.</p>

                        <a class="btn btn-default update" href="{{ url('carts') }}">Back</a>
                        <button class="btn btn-default check_out">Confirm</button>
                    </form>
                </div>
            </div>
    </section>

@endsection




