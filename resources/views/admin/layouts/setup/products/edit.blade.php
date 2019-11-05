<form action="{{ url('products/'.$product->product_id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}" placeholder="Enter Product Name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo" placeholder="upload photo">
                    <a href="{{ asset('/uploads/products/'.$product->product_photo) }}" target="_blank"><img src="{{ asset('/uploads/products/'.$product->product_photo) }}" style="width: 30px;height: 30px;border:1px solid gray; " alt="product photo"></a>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Category</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">-Select-</option>
                        @foreach($categories as $row)
                            <option value="{{ $row->category_id }}" @if($product->category_id==$row->category_id) selected @endif>{{ $row->category_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Brand</label>
                    <select name="brand_id" class="form-control" required>
                        <option value="">-Select-</option>
                        @foreach($brands as $row)
                            <option value="{{ $row->brand_id }}" @if($product->brand_id==$row->brand_id) selected @endif>{{ $row->brand_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Price(Tk)</label>
                    <input type="number" min="1" class="form-control" name="product_price" value="{{ $product->product_price }}" placeholder="Enter Product Price" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Size</label>
                    <input type="text" class="form-control" name="product_size" value="{{ $product->product_size }}" placeholder="Enter Product Size">
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Available Color</label>
                    <input type="text" class="form-control" name="product_color" value="{{ $product->product_color }}" placeholder="Enter Product Color">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Active Status</label>
                    <select name="active_fg" class="form-control">
                        <option value="1" @if($product->active_fg==1) selected @endif >Active</option>
                        <option value="0" @if($product->active_fg==0) selected @endif >Inactive</option>
                    </select>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Description</label>
                    <textarea name="product_desc" row="7" class="form-control" placeholder="Enter Product Description">{{ $product->product_desc }}</textarea>
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

<!-- image upload validation -->
<script>
    $('#photo').bind('change', function () {
        var fileSize = this.files[0].size;
        var maxSize  = 500000; //500kb
        var validExtension = ['jpg','JPG','jpeg','JPEG','png','PNG'];
        if (fileSize > maxSize){
            alert('Sorry! maximum upload size 500kb');
            $('#photo').val('');
        }
        if($.inArray($(this).val().split('.').pop().toLowerCase(), validExtension) == -1){
            alert('Only jpg, jpeg and png formats are allowed!');
            $('#photo').val('');
        }
    })
</script>
<!--image upload validation-->
<script>
    $('#photo').bind('change', function () {
        var fileSize = this.files[0].size;
        var maxSize  = 500000; //500kb
        var validExtension = ['jpg','JPG','jpeg','JPEG','png','PNG'];
        if (fileSize > maxSize){
            alert('Sorry! maximum upload size 500kb');
            $('#photo').val('');
        }
        if($.inArray($(this).val().split('.').pop().toLowerCase(), validExtension) == -1){
            alert('Only jpg, jpeg and png formats are allowed!');
            $('#photo').val('');
        }
    })
</script>