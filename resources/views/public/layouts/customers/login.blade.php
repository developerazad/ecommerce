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
    .breadcrumbs .breadcrumb li a:after {
        left:75px!important;
    }
</style>

@section('content')

    <section id="cart_items">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Customer</a></li>
                <li class="active">login</li>
            </ol>
        </div>
    </section>
    <section id="do_action">
            <div class="heading">
                <p>Please provide your credentials</p>
                @if(session('error'))
                <p style="color: red">{{ session('error') }}</p>
                @endif
            </div>
            <div class="row" style="margin:0!important;">
                <div class="shopper-info">
                    <form action="{{ url('user-validate') }}" method="post">
                        @csrf
                            <input type="email" placeholder="E-mail" name="customer_email">
                            <input type="password" placeholder="Password" name="customer_pwd">

                        <a class="btn btn-default update" href="{{ url('/') }}">Continue Shopping</a>
                        <button class="btn btn-default check_out" type="submit">Login</button>
                    </form>
                </div>
            </div>
    </section>

@endsection


