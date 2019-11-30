<form action="{{ route('sliders.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="box-body">
        <div class="form-group">
            <label for="name">Heading One</label>
            <input type="text" class="form-control" name="heading_one" placeholder="Enter slider heading" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="heading_desc" placeholder="Enter slider description">
        </div>
        <div class="form-group">
            <label for="photo">Photo (484*441 dimension and white background)</label>
            <input type="file" class="form-control" name="photo" >
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
