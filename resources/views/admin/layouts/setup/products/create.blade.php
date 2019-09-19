<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Photo</label>
                    <input type="file" class="form-control" name="photo" placeholder="upload photo">
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">-Select-</option>
                        {{--@foreach($categories as $row)--}}
                            {{--<option value="{{ $row->category_id }}">{{ $row->category_name }}</option>--}}
                        {{--@endforeach--}}
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Manufacturer</label>
                    <select name="manufactures_id" class="form-control">
                        <option value="">-Select-</option>
                        @foreach($manufactures as $row)
                            <option value="{{ $row->manufactures_id }}">{{ $row->manufactures_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Price(TK)</label>
                    <input type="number" min="1" class="form-control" name="product_price" placeholder="Enter Product Price">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Size</label>
                    <input type="text" class="form-control" name="product_size" placeholder="Enter Product Size">
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Available Color</label>
                    <input type="text" class="form-control" name="product_color" placeholder="Enter Product Color">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Active Status</label>
                    <select name="active_fg" class="form-control">
                        <option value="1" selected>Active</option>
                        <option value="0" >Inactive</option>
                    </select>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Description</label>
                    <textarea name="product_desc" id="" class="form-control" placeholder="Enter Product Description"></textarea>
                </div>
            </div>
        </div> <!-- /.row -->

    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </div>
</form>
