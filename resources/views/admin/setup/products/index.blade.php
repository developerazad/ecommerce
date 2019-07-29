@extends('admin.dashboard.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        {{--<h3 class="box-title">Data Table With Full Features</h3>--}}
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
                                    <td>{{ $row->product_photo }}</td>
                                    <td>{{ $row->category_id }}</td>
                                    <td>{{ $row->manufactures_id }}</td>
                                    <td>{{ $row->product_price }}</td>
                                    <td>
                                        @if($row->active_fg==1)
                                            <button type="button" class="btn btn-primary btn-xs">Active</button>
                                        @else
                                            <button type="button" class="btn btn-danger btn-xs">Inactive</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" id="addSomething" data-toggle="modal" data-action="{{ url('products/'.$row->product_id.'/edit') }}" data-modal="{{ $header['modalSize'] }}" data-title="Edit {{ $row->product_name }}" data-target="#myModal" class="btn btn-info btn-xs">Edit</button> |
                                        <button type="button" class="btn btn-danger btn-xs deleteRow" data-action="{{ url('delete-product/'.$row->product_id) }}" >Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
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