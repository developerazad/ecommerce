<div class="brands_products"><!--brands_products-->
    <h2>Brands</h2>
    <div class="brands-name">
        <ul class="nav nav-pills nav-stacked">
            @foreach($brands as $brand)
            <li><a href="{{ url('brand-wise-search/'.$brand->brand_id) }}"> <span class="pull-right">(50)</span>{{ $brand->brand_name }}</a></li>
            @endforeach
        </ul>
    </div>
</div><!--/brands_products-->