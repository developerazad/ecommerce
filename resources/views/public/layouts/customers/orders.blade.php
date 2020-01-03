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
                        <div class="table-responsive cart_info">
                            <table class="table table-responsive table-bordered table-hover">
                                <thead class="bg-success">
                                <tr>
                                    <td>Sl.</td>
                                    <td>Order No</td>
                                    <td>Order Total</td>
                                    <td>Order Date</td>
                                    <td>Status</td>
                                    <td>Details</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $key => $order)
                                    <tr>
                                        <td> {{ ++$key }} </td>
                                        <td> Order# {{ $order->ordermst_id }} </td>
                                        <td> ${{ number_format($order->order_total,2) }} </td>
                                        <td> {{ date('d-M-Y', strtotime($order->order_date)) }} </td>
                                        <td>
                                            @if($order->order_status==='P')
                                                <button class="btn btn-xs btn-info">Pending</button>
                                            @elseif($order->order_status==='R')
                                                <button class="btn btn-xs btn-warning">Received</button>
                                            @elseif($order->order_status==='PR')
                                                <button class="btn btn-xs btn-success">Processing</button>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-xs" id="modalOpen" data-action="{{ url('order-details') }}" data-modal="modal-lg" data-title="View Order Details" data-toggle="modal" data-target="#openModal">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
    </section>

@endsection


