<form action="{{ url('sliders/'.$slider->slider_id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="box-body">
        <div class="form-group">
            <label for="name">Heading One</label>
            <input type="text" class="form-control" name="heading_one" value="{{ $slider->heading_one }}" placeholder="Enter slider heading" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="heading_desc" value="{{ $slider->heading_desc }}" placeholder="Enter slider description">
        </div>
        <div class="form-group">
            <label for="photo">Photo (484*441 dimension and white background)</label>
            <input type="file" class="form-control" name="photo" >
            <input type="hidden" name="photo" value="{{ $slider->slider_photo }}" >
        </div>
        <div class="form-group">
            <label for="status">Active Status</label>
            <select name="active_fg" class="form-control">
                <option value="1" @if($slider->active_fg==1) selected @endif>Active</option>
                <option value="0" @if($slider->active_fg==0) selected @endif>Inactive</option>
            </select>
        </div>

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>
