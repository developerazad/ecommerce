<form action="{{ url('categories/'.$category->category_id) }}" method="post">
    @method('PUT')
    {{ csrf_field() }}
    <div class="box-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}" id="category_name" placeholder="Enter Category Name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="category_desc" value="{{ $category->category_desc }}" id="category_desc" placeholder="Enter Category Description">
        </div>
        <div class="form-group">
            <label for="status">Active Status</label>
            <select name="active_fg" id="" class="form-control">
                <option value="1" @if($category->active_fg==1) selected @endif>Active</option>
                <option value="0" @if($category->active_fg==0) selected @endif>Inactive</option>
            </select>
        </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>