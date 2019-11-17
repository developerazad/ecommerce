<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Enter Product Name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Photo</label>
                    <input type="file" class="form-control" name="photo" id="photo" placeholder="upload photo" required>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Category</label>
                    <select name="category_id" class="form-control select2" style="width: 100%" required>
                        <option value="">-Select-</option>
                        @foreach($categories as $row)
                            <option value="{{ $row->category_id }}">{{ $row->category_name }}</option>
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
                            <option value="{{ $row->brand_id }}">{{ $row->brand_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Price ($)</label>
                    <input type="number" min="10" class="form-control" name="product_price" placeholder="Enter Product Price" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Product Code</label>
                    <input type="text" class="form-control" name="product_code" placeholder="Enter Product Code">
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Remarks</label>
                    <input type="text" class="form-control" name="product_remarks" placeholder="Enter Product Remarks">
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
                    <textarea name="product_desc" row="7" class="form-control" placeholder="Enter Product Description"></textarea>
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