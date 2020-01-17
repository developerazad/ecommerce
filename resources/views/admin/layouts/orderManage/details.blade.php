<div class="box-body">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h4 class="text-left" style="font-weight: bold;">Order Info:</h4>
            <hr>
            <p>Order No # {{ $orders[0]->udorder_no }}</p>
            <p>Order Date:  {{ date('d-M-Y', strtotime($orders[0]->order_date)) }} </p>
            <p>Order Status:
                @if($orders[0]->order_status==='P')
                    <button class="btn btn-xs btn-danger">Pending</button>
                @elseif($orders[0]->order_status==='R')
                    <button class="btn btn-xs btn-primary">Received</button>
                @elseif($orders[0]->order_status==='PR')
                    <button class="btn btn-xs btn-info">Processing</button>
                @elseif($orders[0]->order_status==='PR')
                    <button class="btn btn-xs btn-success">Processing</button>
                @endif
            </p>
            <p>Order Total: ${{ $orders[0]->order_total }}</p>
        </div>
        <div class="col-md-6 col-lg-6">
            <h4 class="text-left" style="font-weight: bold;">Shipping Address:</h4>
            <hr>
            <p>Name:  {{ $orders[0]->customer_name }} </p>
            <p>Address:  {{ $orders[0]->order_place }} </p>
            <p>Contact:  {{ $orders[0]->contact_no }} </p>
            <p>Payment Type:
                @if($orders[0]->payment_method==='cod')
                    <button class="btn btn-xs btn-primary">COD</button>
                @elseif($orders[0]->payment_method==='bkash')
                    <button class="btn btn-xs btn-primary">bKash</button>
                @endif
            </p>
        </div>
    </div>
    <h4 style="font-weight: bold;">Product(s) Details:</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-hover col-md-12 col-lg-12 col-sm-12 col-xm-12" width="100%" cellspacing="0">
            <thead>
            <tr style="background-color: #e6e5dd;">
                <th>Sl.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Code</th>
                <th>Quantity</th>
                <th>Unit Price($)</th>
                <th>Sub Total($)</th>
            </tr>
            </thead>
            <tbody>
                @foreach($orders as $key => $row)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $row->product_name }}</td>
                    <td><img src="{{ url('/uploads/products/'.$row->product_photo) }}" class="img-responsive" alt="Product Image" style="width: 45px;height: 30px;"></td>
                    <td>{{ $row->product_code }}</td>
                    <td>{{ $row->product_qty }}</td>
                    <td>{{ $row->unit_price }}</td>
                    <td>{{ $row->subtotal_price }}</td>
                </tr>
                @endforeach
            <tr>
                <td colspan="6"><strong>Total Amount To Pay</strong></td>
                <td><strong>${{ $orders[0]->order_total }}</strong></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="box-footer" style="border-top: 0!important;">
        <button type="submit" class="btn btn-primary">Submit</button> &nbsp;&nbsp;
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
