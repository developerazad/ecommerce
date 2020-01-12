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
                                <thead>
                                    <tr style="background-color: #F0F0E9;">
                                        <td>Sl.</td>
                                        <td>Order No</td>
                                        <td>Order Total</td>
                                        <td>Order Date</td>
                                        <td>Status</td>
                                        <td>Details</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <!-- pending orders-->
                                @if(isset($orders))
                                @foreach($orders as $key => $order)
                                    <tr>
                                        <td> {{ ++$key }} </td>
                                        <td> Order# {{ $order->udorder_no }} </td>
                                        <td> ${{ number_format($order->order_total,2) }} </td>
                                        <td> {{ date('d-M-Y', strtotime($order->order_date)) }} </td>
                                        <td>
                                            @if($order->order_status==='P')
                                                <button class="btn btn-xs btn-danger pull-right">Pending</button>
                                            @elseif($order->order_status==='R')
                                                <button class="btn btn-xs btn-warning pull-right">Received</button>
                                            @elseif($order->order_status==='PR')
                                                <button class="btn btn-xs btn-success pull-right">Processing</button>
                                            @endif
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="#" class="btn btn-info btn-xs modal-link"
                                               data-action="{{ url('order-details/'.$order->ordermst_id) }}"
                                               data-modal="modal-full"
                                               data-title="View Order Details"
                                               data-toggle="modal"
                                               data-target="#modalOpen">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                @endif
                                <!--/. pending orders -->

                                <!-- received orders-->
                                @if(isset($receivedOrders))
                                @foreach($receivedOrders as $key => $order)
                                    <tr>
                                        <td> {{ ++$key }} </td>
                                        <td> Order# {{ $order->udorder_no }} </td>
                                        <td> ${{ number_format($order->order_total,2) }} </td>
                                        <td> {{ date('d-M-Y', strtotime($order->order_date)) }} </td>
                                        <td>
                                            @if($order->order_status==='D')
                                                <button class="btn btn-xs btn-success pull-right">Delivered</button>
                                            @endif
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="#" class="btn btn-success btn-xs modal-link"
                                               data-action="{{ url('order-details/'.$order->ordermst_id) }}"
                                               data-modal="modal-xl"
                                               data-title="View Order Details"
                                               data-toggle="modal"
                                               data-target="#modalOpen">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                @endif
                                <!--/. received orders -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <div class="modal fade" id="modalOpen">
        <div class="modal-dialog">
            <div class="modal-content" style="min-width: 700px;">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>

                <div class="modal-body"></div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection


