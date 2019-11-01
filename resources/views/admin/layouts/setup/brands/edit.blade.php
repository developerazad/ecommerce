<form action="{{ url('brands/'.$brand->brand_id) }}" method="post">
    @method('PUT')
    @csrf
    <div class="box-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="brand_name" value="{{ $manufacture->brand_name }}" placeholder="Enter Brand Name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="brand_desc" value="{{ $manufacture->brand_desc }}" placeholder="Enter Brand Description">
        </div>
        <div class="form-group">
            <label for="status">Active Status</label>
            <select name="active_fg" id="" class="form-control">
                @if($manufacture->active_fg==1)
                    <option value="1" selected>Active</option>
                    <option value="0" >Inactive</option>
                @else
                    <option value="1" >Active</option>
                    <option value="0" selected>Inactive</option>
                @endif
            </select>
        </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </div>
</form>