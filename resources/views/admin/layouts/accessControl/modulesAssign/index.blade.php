@extends('admin.layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box box-info">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-inline">
                                    <label for="user-group">User Groups:&nbsp;</label>
                                    <select name="user-groups" class="form-control user-groups" style="width: 50%!important;">
                                        @foreach($userGroups as $userGroup)
                                        <option value="{{ $userGroup->user_group_id }}">{{ $userGroup->user_group_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body user-group-wise-permission">
                        <table class="table table-bordered table-hover">
                            @foreach($modules as $module)
                            <thead>
                                <tr class="bg-info">
                                    <td>{{ $module->module_name }}</td>
                                    <td>Create</td>
                                    <td>Read</td>
                                    <td>Update</td>
                                    <td>Delete</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($moduleLinks as $link)
                                @if($module->module_id===$link->module_id)
                                <tr>
                                    <td>{{ $link->module_link_name }}</td>
                                    <td><input type="checkbox" class="create-permission"></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox"></td>
                                    <td><input type="checkbox"></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                            @endforeach
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


