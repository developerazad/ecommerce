<form action="{{ url('module-links/'.$moduleLink->modlink_id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="modlink_name" value="{{ $moduleLink->modlink_name }}" placeholder="Enter Module Link Name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Parent Module</label>
                    <select name="module_id" class="form-control select2" style="width: 100%" required>
                        <option value="">-Select-</option>
                        @foreach($modules as $row)
                            <option value="{{ $row->module_id }}" @if($moduleLink->module_id===$row->module_id) selected @endif>{{ $row->module_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Route Url</label>
                    <input type="text" class="form-control" name="route_url" value="{{ $moduleLink->route_url }}" placeholder="Enter route-url" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Controller@method</label>
                    <input type="text" class="form-control" name="controller_method" value="{{ $moduleLink->controller_method }}" placeholder="Enter Controller@method Name" required>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Method Type</label>
                    <select name="method_type" class="form-control select2" style="width: 100%" required>
                        <option value="">-Select-</option>
                        <option value="G"  @if($moduleLink->method_type==='G') selected @endif>GET</option>
                        <option value="P"  @if($moduleLink->method_type==='P') selected @endif>POST</option>
                        <option value="GP" @if($moduleLink->method_type==='GP')selected @endif>GET &amp; POST</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Link Type</label>
                    <select name="modlink_type" class="form-control select2" style="width: 100%" required>
                        <option value="">-Select-</option>
                        <option value="M" @if($moduleLink->modlink_type==='M') selected @endif>Main Menu</option>
                        <option value="O" @if($moduleLink->modlink_type==='O') selected @endif>Others</option>
                    </select>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">User Define Sl</label>
                    <input type="number" class="form-control" name="userdsl_no" value="{{ $moduleLink->userdsl_no }}" placeholder="Enter User Define Sl. No">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Active Status</label>
                    <select name="active_fg" class="form-control">
                        <option value="1" @if($moduleLink->active_fg===1) selected @endif>Active</option>
                        <option value="0" @if($moduleLink->active_fg===0) selected @endif>Inactive</option>
                    </select>
                </div>
            </div>
        </div> <!-- /.row -->

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</form>