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
    <!--/.old system-->
