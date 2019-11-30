@extends('admin.layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Slider list</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="bg-primary">
                                <tr>
                                    <th>Sl</th>
                                    <th style="width:20%;">Heading</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th style="width:10%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $key => $row)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $row->heading_one }}</td>
                                    <td>{{ $row->heading_desc }}</td>
                                    <td>
                                        <a href="{{ asset('uploads/sliders/'.$row->slider_photo) }}" target="_blank"><img src="{{ asset('uploads/sliders/'.$row->slider_photo) }}" alt="Slider image" width="40px" height="40px"></a>
                                    </td>
                                    <td>
                                        @if($row->active_fg==1)
                                            <button type="button" class="btn btn-primary btn-xs">Active</button>
                                        @else
                                            <button type="button" class="btn btn-danger btn-xs">Inactive</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" data-toggle="modal" data-action="{{ url('sliders/'.$row->slider_id.'/edit') }}" data-modal="{{ $header['modalSize'] }}" data-title="Edit Slider" data-target="#myModal" class="btn btn-info btn-xs add-new">Edit</button> |
                                        <button type="button" class="btn btn-danger btn-xs deleteRow" data-action="{{ url('sliders/'.$row->slider_id) }}" >Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Photo</th>
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
