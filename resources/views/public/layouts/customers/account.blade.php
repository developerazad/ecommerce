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
                        <table class="table no-border table-hover table-responsive">
                            <tr>
                                <td>Full Name</td>
                                <td>: {{ $customer->customer_name }}</td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td>: {{ $customer->customer_email }}</td>
                            </tr>
                            <tr>
                                <td>District</td>
                                <td>: {{ $customer->customer_district }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>: {{ $customer->customer_address }}</td>
                            </tr>
                            <tr>
                                <td>Contact</td>
                                <td>: {{ $customer->customer_phone }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
    </section>

@endsection


