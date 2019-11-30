    <!--old system--->
    <h2>Categories</h2>
    <div class="panel-group category-products" id="accordian" ><!--category-products-->
        @foreach($categories as $category)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{ url('category-wise-search/'.$category->category_id) }}" title="Search for {{ $category->category_name }}">{{ $category->category_name }}</a></h4>
            </div>
        </div>
        @endforeach

    </div><!--/category-products-->

    <div class="brands_products"><!--brands_products-->
        <h2>Brands</h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{ url('/') }}"> <span class="pull-right">(50)</span>All Brand</a></li>
                @foreach($brands as $brand)
                    <li><a href="{{ url('brand-wise-search/'.$brand->brand_id) }}"> <span class="pull-right">(50)</span>{{ $brand->brand_name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div><!--/brands_products-->
    <!--/.old system-->
