@extends('admin.layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Product List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $key => $row)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $row->product_name }}</td>
                                    <td>
                                        <a href="{{ asset('uploads/products/'.$row->product_photo) }}" target="_blank"><img src="{{ asset('uploads/products/'.$row->product_photo) }}" alt="Product image" width="40px" height="40px"></a>
                                    </td>
                                    <td>{{ $row->category_name }}</td>
                                    <td>{{ $row->brand_name }}</td>
                                    <td>{{ $row->product_price }}/- </td>
                                    <td>
                                        @if($row->active_fg==1)
                                            <button type="button" class="btn btn-primary btn-xs">Active</button>
                                        @else
                                            <button type="button" class="btn btn-danger btn-xs">Inactive</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" data-toggle="modal" data-action="{{ url('products/'.$row->product_id.'/edit') }}" data-modal="{{ $header['modalSize'] }}" data-title="Edit {{ $row->product_name }}" data-target="#myModal" class="btn btn-info btn-xs add-new">Edit</button> |
                                        <button type="button" class="btn btn-danger btn-xs deleteRow" data-action="{{ url('products/'.$row->product_id) }}" >Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
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
    </div>


@endsection