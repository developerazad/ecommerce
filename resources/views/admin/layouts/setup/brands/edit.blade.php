<form action="{{ url('brands/'.$brand->brand_id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="box-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="brand_name" value="{{ $brand->brand_name }}" placeholder="Enter Brand Name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="brand_desc" value="{{ $brand->brand_desc }}" placeholder="Enter Brand Description">
        </div>
        <div class="form-group">
            <label for="status">Active Status</label>
            <select name="active_fg" id="" class="form-control">
                <option value="1" @if($brand->active_fg==1) selected @endif>Active</option>
                <option value="0" @if($brand->active_fg==0) selected @endif>Inactive</option>
            </select>
        </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>