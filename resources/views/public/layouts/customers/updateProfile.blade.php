@extends('public.layouts.master')
<style>
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
                <li class="active">Account</li>
            </ol>
        </div>
    </section>
    <section id="do_action">
            <div class="row" style="margin:0!important;">
                <div class="col-md-3">
                    @include('public.layouts.customers.menus')
                </div>
                <div class="col-md-9">
                    <div class="shopper-info">
                        <form action="{{ url('update-customer-profile') }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="text" placeholder="Full Name" name="customer_name" value="{{ $customer->customer_name }}" required>
                            <input type="email" placeholder="E-mail" name="customer_email" value="{{ $customer->customer_email }}" required>
                            <input type="text" placeholder="Address" name="customer_address" value="{{ $customer->customer_address }}" required>
                            <select name="customer_district" required>
                                <option value="1">Dhaka</option>
                                <option value="2">Rajshahi</option>
                                <option value="3">Rangpur</option>
                            </select>
                            <input type="text" placeholder="Contact" name="customer_phone" value="{{ $customer->customer_phone }}" required>

                            <br><br>
                            <button class="btn btn-default update" type="submit">Update Profile</button>
                        </form>
                    </div>
                </div>

            </div>
    </section>

@endsection


