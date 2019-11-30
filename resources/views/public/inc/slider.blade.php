<style>
    .get{
        background: #00BCD4;
    }
</style>
<section id="slider" style="margin: 20px 0"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        @foreach($sliders as $i => $slider)
                        <div class="item @if($i==0) active @endif">
                            <div class="col-sm-6">
                                <h1><span>E</span>-SHOP</h1>
                                <h2>{{ $slider->heading_one }}</h2>
                                <p>{{ $slider->heading_desc }}</p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ URL('/uploads/sliders/'.$slider->slider_photo) }}" class="girl img-responsive" alt="" style="width: 484px;height: 441px;"/>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
