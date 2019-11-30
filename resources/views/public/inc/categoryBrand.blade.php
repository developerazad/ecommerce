    <!--new system--->
    <h2>Categories</h2>
    <div class="panel-group"><!--category-products-->
        @php $collapse_id = ''; @endphp
        @foreach($categories as $collapse_id => $category)
        <div class="panel panel-default" >
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapse{{++$collapse_id}}">{{ $category->category_name }}</a>
                </h4>
            </div>
            <div id="collapse{{$collapse_id}}" class="panel-collapse collapse">
                <ul class="list-group">
                    @foreach($products as $product)
                        @if($category->category_id===$product->category_id)
                            <a href="{{ url('brand-wise-products/'.$category->category_id.'/'.$product->brand_id) }}"><li class="list-group-item">{{ $product->brand_name }}</li></a>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div><!--/category-products-->
    <!--/.new system-->
    <br>

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
