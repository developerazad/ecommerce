<form action="{{ url('categories/'.$editData->category_id) }}" method="post">
    @method('PUT')
    {{ csrf_field() }}
    <div class="box-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="category_name" value="{{ $editData->category_name }}" id="category_name" placeholder="Enter Category Name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="category_desc" value="{{ $editData->category_desc }}" id="category_desc" placeholder="Enter Category Description">
        </div>
        <div class="form-group">
            <label for="status">Active Status</label>
            <select name="active_fg" id="" class="form-control">
                @if($editData->active_fg==1)
                    <option value="1" selected>Active</option>
                    <option value="0" >Inactive</option>
                @elseif($editData->active_fg==0)
                    <option value="1" >Active</option>
                    <option value="0" selected>Inactive</option>
                @else
                    <option value="1" selected>Active</option>
                    <option value="0" >Inactive</option>
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