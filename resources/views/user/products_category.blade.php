@extends('layouts.front') 
@section('title') 
Product 
@endsection 
@section('content')
<style type="text/css">
    svg.w-5.h-5 {
    width: 30px !important;
}
.flex.justify-between.flex-1.sm\:hidden {
    display: none;
}
p.text-sm.text-gray-700.leading-5 {
    display: none;
}
</style>
	<div class="breadcrumb-section" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-sm-6" bis_skin_checked="1">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb justify-content-start">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" previewlistener="true">home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('category') }}" previewlistener="true">category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper" bis_skin_checked="1">
            <div class="container" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-sm-3 collection-filter" bis_skin_checked="1">
                        <!-- side-bar colleps block stat -->
                        <div class="collection-filter-block" bis_skin_checked="1">
                            <!-- brand filter start -->
                            <div class="collection-mobile-back" bis_skin_checked="1"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                            <div class="collection-collapse-block open" bis_skin_checked="1">
                                <h3 class="collapse-block-title">Categories</h3>
                                <div class="collection-collapse-block-content" bis_skin_checked="1">
                                    <div class="collection-brand-filter" bis_skin_checked="1">
                                        @foreach($category as $val)
                                        
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="zara">
                                            <label class="form-check-label" for="zara">{{ $val->title }}</label>
                                            <label class="form-check-label" for="zara">({{ $val->products_count }})</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- color filter start here -->
                            <div class="collection-collapse-block open" bis_skin_checked="1">
                                <h3 class="collapse-block-title">colors</h3>
                                <div class="collection-collapse-block-content" bis_skin_checked="1">
                                    <div class="color-selector" bis_skin_checked="1">
                                        <ul>
                                            <li class="color-1"></li>
                                            <li class="color-2"></li>
                                            <li class="color-3"></li>
                                            <li class="color-4"></li>
                                            <li class="color-5"></li>
                                            <li class="color-6"></li>
                                            <li class="color-7 active"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- size filter start here -->
                            <div class="collection-collapse-block border-0 open" bis_skin_checked="1">
                                <h3 class="collapse-block-title">size</h3>
                                <div class="collection-collapse-block-content" bis_skin_checked="1">
                                    <div class="collection-brand-filter" bis_skin_checked="1">
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="hundred">
                                            <label class="form-check-label" for="hundred">s</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="twohundred">
                                            <label class="form-check-label" for="twohundred">m</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="threehundred">
                                            <label class="form-check-label" for="threehundred">l</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox" bis_skin_checked="1">
                                            <input type="checkbox" class="form-check-input" id="fourhundred">
                                            <label class="form-check-label" for="fourhundred">xl</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- price filter start here -->
                            <div class="collection-collapse-block border-0 open" bis_skin_checked="1">
                                <h3 class="collapse-block-title">price</h3>
                                <div class="collection-collapse-block-content" bis_skin_checked="1">
                                    <div class="wrapper mt-3" bis_skin_checked="1">
                                        <div class="range-slider" bis_skin_checked="1">
                                            <input type="hidden" class="js-range-slider irs-hidden-input" value="" readonly="" fdprocessedid="xdlrc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- silde-bar colleps block end here -->
                        <!-- side-bar single product slider start -->
                        <div class="theme-card" bis_skin_checked="1">
                            <h5 class="title-border">new product</h5>
                            <div class="offer-slider slide-1 slick-initialized slick-slider" bis_skin_checked="1"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;" fdprocessedid="ta0yfn">Previous</button><div class="slick-list draggable" bis_skin_checked="1"><div class="slick-track" style="opacity: 1; width: 1630px; transform: translate3d(-326px, 0px, 0px);" bis_skin_checked="1"><div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 326px;" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/001.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>black White Printed Dresses</h6>
                                            </a>
                                            <h4>$32.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/4.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>Dotted Black Dresses</h6>
                                            </a>
                                            <h4>$38.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/19.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>Blue Printed Dresses</h6>
                                            </a>
                                            <h4>$36.00</h4>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 326px;" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="0" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/1.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="0" previewlistener="true">
                                                <h6>Green Printed Dresses</h6>
                                            </a>
                                            <h4>30.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="0" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/011.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="0" previewlistener="true">
                                                <h6>Pink Printed Dresses</h6>
                                            </a>
                                            <h4>$35.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="0" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/16.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="0" previewlistener="true">
                                                <h6>Solid Green Dresses</h6>
                                            </a>
                                            <h4>$33.00</h4>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 326px;" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/001.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>black White Printed Dresses</h6>
                                            </a>
                                            <h4>$32.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/4.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>Dotted Black Dresses</h6>
                                            </a>
                                            <h4>$38.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/19.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>Blue Printed Dresses</h6>
                                            </a>
                                            <h4>$36.00</h4>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 326px;" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/1.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>Green Printed Dresses</h6>
                                            </a>
                                            <h4>30.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/011.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>Pink Printed Dresses</h6>
                                            </a>
                                            <h4>$35.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/16.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>Solid Green Dresses</h6>
                                            </a>
                                            <h4>$33.00</h4>
                                        </div>
                                    </div>
                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 326px;" bis_skin_checked="1"><div bis_skin_checked="1"><div style="width: 100%; display: inline-block;" bis_skin_checked="1">
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/001.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>black White Printed Dresses</h6>
                                            </a>
                                            <h4>$32.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/4.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>Dotted Black Dresses</h6>
                                            </a>
                                            <h4>$38.00</h4>
                                        </div>
                                    </div>
                                    <div class="media" bis_skin_checked="1">
                                        <a href="" tabindex="-1" previewlistener="true"><img class="img-fluid blur-up lazyloaded" src="../assets/images/fashion/pro/19.jpg" alt=""></a>
                                        <div class="media-body align-self-center" bis_skin_checked="1">
                                            <div class="rating" bis_skin_checked="1"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            </div><a href="product-page(no-sidebar).html" tabindex="-1" previewlistener="true">
                                                <h6>Blue Printed Dresses</h6>
                                            </a>
                                            <h4>$36.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                                <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;" fdprocessedid="cgq18b">Next</button>
                            </div>
                        </div>
                        <!-- side-bar single product slider end -->
                        <!-- side-bar banner start here -->
                        <div class="collection-sidebar-banner" bis_skin_checked="1">
                            <a href="#"><img src="../assets/images/side-banner.png" class="img-fluid blur-up lazyloaded" alt=""></a>
                        </div>
                        <!-- side-bar banner end here -->
                    </div>
                    <div class="collection-content col" bis_skin_checked="1">
                        <div class="page-main-content" bis_skin_checked="1">
                            <div class="row" bis_skin_checked="1">
                                <div class="col-sm-12" bis_skin_checked="1">
                                    
                                    <div class="collection-product-wrapper" bis_skin_checked="1">
                                        <div class="product-top-filter" bis_skin_checked="1">
                                            <div class="row" bis_skin_checked="1">
                                                <div class="col-xl-12" bis_skin_checked="1">
                                                    <div class="filter-main-btn" bis_skin_checked="1"><span class="filter-btn btn btn-theme"><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                                </div>
                                            </div>
                                            <div class="row" bis_skin_checked="1">
                                                <div class="col-12" bis_skin_checked="1">
                                                    <div class="product-filter-content" bis_skin_checked="1">
                                                        <div class="search-count" bis_skin_checked="1">
                                                            <h5>Showing Products 1-24 of 10 Result</h5>
                                                        </div>
                                                        <div class="collection-view" bis_skin_checked="1">
                                                            <ul>
                                                                <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="collection-grid-view" bis_skin_checked="1" style="opacity: 1;">
                                                            <ul>
                                                                <li><img src="{{asset('assets/images/10.png')}}" alt="" class="product-2-layout-view"></li>
                                                                <li><img src="{{asset('assets/images/11.png')}}" alt="" class="product-3-layout-view"></li>
                                                                <li><img src="{{asset('assets/images/12.png')}}" alt="" class="product-4-layout-view"></li>
                                                                <li><img src="{{asset('assets/images/13.png')}}" alt="" class="product-6-layout-view"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-page-per-view" bis_skin_checked="1">
                                                            <select fdprocessedid="wrpss">
                                                                <option value="High to low">24 Products Par Page
                                                                </option>
                                                                <option value="Low to High">50 Products Par Page
                                                                </option>
                                                                <option value="Low to High">100 Products Par Page
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="product-page-filter" bis_skin_checked="1">
                                                            <select fdprocessedid="dhr36h">
                                                                <option value="High to low">Sorting items</option>
                                                                <option value="Low to High">50 Products</option>
                                                                <option value="Low to High">100 Products</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper-grid product-load-more" bis_skin_checked="1" style="opacity: 1;">
                                            <div class="row margin-res" bis_skin_checked="1">

                                                @foreach($shop as $val)
                                                <div class="col-lg-3" bis_skin_checked="1" style="display: block;">

                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                            @php
                                                                $images = json_decode($val['images']);
                                                            @endphp
                                                                <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                                                                    <img src="{{asset('upload/product/'.$images[0])}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                                                                    <img src="{{asset('upload/product/'.$images[1])}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                                </button>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="fa-regular fa-heart"></i>
                                                                </a>
                                                                <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}"  title="Quick View">
                                                                    <i class="fa-solid fa-eye"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating">
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i> 
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="">
                                                                <h6 style="color: #f85606;">{{$val->category->title}}</h6>
                                                            </a>
                                                            <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                                                                <h6>{{$val->product_name}}</h6>
                                                            </a>
                                                            <?php
                                                                // Check if $val->price and $val->selling_price are numeric before performing the calculation
                                                                if (is_numeric($val->price) && is_numeric($val->selling_price) && $val->price != 0) {
                                                                    // Calculate the discount percentage
                                                                    $discountPercentage = round((($val->price - $val->selling_price) / $val->price) * 100);
                                                                } else {
                                                                    // Set a default value or handle the case where the values are not numeric or $val->price is 0
                                                                    $discountPercentage = 0;
                                                                }
                                                            ?>
                                                            <div class="d-flex">
                                                                <h4><del>${{$val->price}}</del></h4>
                                                                <h4 style="margin-left: 20px;">${{$val->selling_price}}</h4>
                                                                <h5 style="margin-left: 20px; color: #f85606;">{{ $discountPercentage }}% Off</h5>
                                                            </div>
                                                        </div>                                                          
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="product-pagination border-0" bis_skin_checked="1">
                                            <div class="theme-paggination-block" bis_skin_checked="1">
                                                <div class="container-fluid p-0" bis_skin_checked="1">
                                                    <div class="row" bis_skin_checked="1">
                                                        <div class="col-xl-12 col-md-12 col-sm-12" bis_skin_checked="1">
                                                            {{ $shop->appends($_GET)->links('pagging') }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection 
@section('script')
<script type="text/javascript">
	$('.collapse-block-title').on('click', function (e) {
        e.preventDefault;
        var speed = 300;
        var thisItem = $(this).parent(),
            nextLevel = $(this).next('.collection-collapse-block-content');
        if (thisItem.hasClass('open')) {
            thisItem.removeClass('open');
            nextLevel.slideUp(speed);
        } else {
            thisItem.addClass('open');
            nextLevel.slideDown(speed);
        }
    });


    //list layout view
    $('.list-layout-view').on('click', function (e) {
        $('.collection-grid-view').css('opacity', '0');
        $(".product-wrapper-grid").css("opacity", "0.2");
        $('.shop-cart-ajax-loader').css("display", "block");
        $('.product-wrapper-grid').addClass("list-view");
        $(".product-wrapper-grid").children().children().removeClass();
        $(".product-wrapper-grid").children().children().addClass("col-lg-12");
        setTimeout(function () {
            $(".product-wrapper-grid").css("opacity", "1");
            $('.shop-cart-ajax-loader').css("display", "none");
        }, 500);
    });
    //grid layout view
    $('.grid-layout-view').on('click', function (e) {
        $('.collection-grid-view').css('opacity', '1');
        $('.product-wrapper-grid').removeClass("list-view");
        $(".product-wrapper-grid").children().children().removeClass();
        $(".product-wrapper-grid").children().children().addClass("col-lg-3");

    });
    $('.product-2-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) { } else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-6");
        }
    });
    $('.product-3-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) { } else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-4 col-6");
        }
    });
    $('.product-4-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) { } else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-xl-3 col-6");
        }
    });
    $('.product-6-layout-view').on('click', function (e) {
        if ($('.product-wrapper-grid').hasClass("list-view")) { } else {
            $(".product-wrapper-grid").children().children().removeClass();
            $(".product-wrapper-grid").children().children().addClass("col-lg-2");
        }
    });
</script> 
@endsection 
