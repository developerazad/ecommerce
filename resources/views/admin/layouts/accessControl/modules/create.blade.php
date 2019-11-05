<form action="{{ route('modules.store') }}" method="post">
    @csrf
    <div class="box-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="module_name" placeholder="Enter Module Name" required>
        </div>
        <div class="form-group">
            <label for="description">User Define Sl.</label>
            <input type="number" class="form-control" name="userdsl_no" placeholder="Enter Sl No." min="1">
        </div>
        <div class="form-group">
            <label for="description">Icon Class</label>
            <input type="text" class="form-control" name="module_icon" placeholder="Enter Icon Class">
        </div>
        <div class="form-group">
            <label for="status">Active Status</label>
            <select name="active_fg" id="" class="form-control">
                <option value="1" selected>Active</option>
                <option value="0" >Inactive</option>
            </select>
        </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>