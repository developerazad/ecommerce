<form action="{{ url('modules/'.$module->module_id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="box-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="module_name" value="{{ $module->module_name }}" placeholder="Enter Module Name" required>
        </div>
        <div class="form-group">
            <label for="description">User Define Sl.</label>
            <input type="number" class="form-control" name="userdsl_no" value="{{ $module->userdsl_no }}" placeholder="Enter Sl No." min="1">
        </div>
        <div class="form-group">
            <label for="description">Icon Class</label>
            <input type="text" class="form-control" name="module_icon" value="{{ $module->module_icon }}" placeholder="Enter Icon Class">
        </div>
        <div class="form-group">
            <label for="status">Active Status</label>
            <select name="active_fg" id="" class="form-control">
                <option value="1" @if($module->active_fg==1) selected @endif>Active</option>
                <option value="0" @if($module->active_fg==0) selected @endif>Inactive</option>
            </select>
        </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>