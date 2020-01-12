@extends('admin.layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">User list</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="bg-primary">
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
                            @foreach($orders as $key => $row)
                                <tr>
                                    <td> {{ ++$key }} </td>
                                    <td> Order# {{ $row->udorder_no }} </td>
                                    <td> ${{ number_format($row->order_total,2) }} </td>
                                    <td> {{ date('d-M-Y', strtotime($row->order_date)) }} </td>
                                    <td>
                                        <button class="btn btn-xs btn-info">Processing</button>
                                    </td>
                                    <td style="text-align: center;">
                                        <button type="button" data-toggle="modal" data-action="{{ url('order-details-view/'.$row->ordermst_id) }}" data-modal="{{ $header['modalSize'] }}" data-title="View Order Details" data-target="#myModal" class="btn btn-info btn-xs modal-link">view</button>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Sl.</td>
                                    <td>Order No</td>
                                    <td>Order Total</td>
                                    <td>Order Date</td>
                                    <td>Status</td>
                                    <td>Details</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->


@endsection
