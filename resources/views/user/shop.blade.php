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
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb justify-content-start">
                        <li class="breadcrumb-item"><a href="index.html" previewlistener="true">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="section-b-space ratio_asos">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 collection-filter">
                    <!-- side-bar colleps block stat -->
                    <div class="collection-filter-block">
                        <!-- brand filter start -->
                        <div class="collection-collapse-block open">
                            <h3 class="collapse-block-title">Categories</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    @foreach($category as $key => $val)
                                    <div class="form-check collection-filter-checkbox d-flex justify-content-between">
                                        <div>   
                                            <input type="checkbox" name="categories[]" value="{{ $val->id }}" class="form-check-input filters" id="zara{{$key}}">
                                            <label class="form-check-label" for="zara{{$key}}">{{ $val->title }}</label>
                                        </div>
                                        <div>
                                            <span class="countsf ms-5" style="background-color:#f39910 !important;">{{ $val->products_count }}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- color filter start here -->
                        <div class="collection-collapse-block open">
                            <h3 class="collapse-block-title">Colors</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    @foreach($details as $key => $val)
                                    <div class="form-check collection-filter-checkbox">
                                        <input type="checkbox" value="{{ $val->color }}" class="form-check-input filters color-checkbox" name="color[]" id="color{{$key}}">
                                        <label class="form-check-label" for="color{{$key}}">{{ $val->color }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- size filter start here -->
                        <div class="collection-collapse-block border-0 open">
                            <h3 class="collapse-block-title">size</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    <div class="form-check collection-filter-checkbox">
                                        <input type="checkbox" class="form-check-input" id="hundred">
                                        <label class="form-check-label" for="hundred">s</label>
                                    </div>
                                    <div class="form-check collection-filter-checkbox">
                                        <input type="checkbox" class="form-check-input" id="twohundred">
                                        <label class="form-check-label" for="twohundred">m</label>
                                    </div>
                                    <div class="form-check collection-filter-checkbox">
                                        <input type="checkbox" class="form-check-input" id="threehundred">
                                        <label class="form-check-label" for="threehundred">l</label>
                                    </div>
                                    <div class="form-check collection-filter-checkbox">
                                        <input type="checkbox" class="form-check-input" id="fourhundred">
                                        <label class="form-check-label" for="fourhundred">xl</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- price filter start here -->
                        <div class="collection-collapse-block border-0 open">
                            <h3 class="collapse-block-title">price</h3>
                            <div class="collection-collapse-block-content">
                                <div class="wrapper mt-3">
                                    <div class="range-slider">
                                        <input type="hidden" class="js-range-slider irs-hidden-input" value="" readonly="" fdprocessedid="xdlrc">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- silde-bar colleps block end here -->
                    <!-- side-bar single product slider start -->
                    
                    <!-- side-bar single product slider end -->
                    <!-- side-bar banner start here -->
                    <div class="collection-sidebar-banner">
                        <a href="#"><img src="../assets/images/side-banner.png" class="img-fluid blur-up lazyloaded" alt=""></a>
                    </div>
                    <!-- side-bar banner end here -->
                </div>
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-filter-content">
                                                    <div class="search-count">
                                                        <h5>Showing 1-{{$shop->count()}} of {{$shop1->count()}}  Products</h5>
                                                    </div>
                                                    <div class="collection-view">
                                                        <ul>
                                                            <li><i class="fa fa-th grid-layout-view"></i></li>
                                                            <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="collection-grid-view" style="opacity: 1;">
                                                        <ul>
                                                            <li><img src="{{asset('assets/images/10.png')}}" alt="" class="product-2-layout-view"></li>
                                                            <li><img src="{{asset('assets/images/11.png')}}" alt="" class="product-3-layout-view"></li>
                                                            <li><img src="{{asset('assets/images/12.png')}}" alt="" class="product-4-layout-view"></li>
                                                            <li><img src="{{asset('assets/images/13.png')}}" alt="" class="product-6-layout-view"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-page-per-view">
                                                        <select fdprocessedid="wrpss">
                                                            <option value="High to low">24 Products Par Page
                                                            </option>
                                                            <option value="Low to High">50 Products Par Page
                                                            </option>
                                                            <option value="Low to High">100 Products Par Page
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="product-page-filter">
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
                                    
                                    <div class="product-wrapper-grid product-load-more" style="opacity: 1;">
                                        {{-- @foreach($shop as $product)
                                        <div id="product-list">
                                            {{ $product->product_name }}
                                        </div>
                                        @endforeach --}}
                                        <div class="row margin-res" id="margin-res">
                                            @foreach($shop as $val)
                                            <div class="col-lg-3" id="product-list"  style="display: block;">
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
                                                            <h6 style="color: #f39910;">{{$val->category->title}}</h6>
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
                                                            <h5 style="margin-left: 20px; color: #f39910;">{{ $discountPercentage }}% Off</h5>
                                                        </div>
                                                    </div>                                                          
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="product-pagination border-0">
                                        <div class="theme-paggination-block">
                                            <div class="container-fluid p-0">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12" id="pagging">
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
<script>
    $(document).ready(function () {

        $('.filters').change(function () {
            var selectedCategories = $('.category-checkbox:checked').map(function () {
                return this.value;
            }).get();
            var selectedcolor = $('.color-checkbox:checked').map(function () {
                return this.value;
            }).get();
            $.ajax({
                url: "{{ url('shop')}}",
                method: 'post',
                data: { category: selectedCategories, details: selectedcolor },
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (response) {
                    $('#margin-res').html('');
                    $('#pagging').html('');
                    response = JSON.parse(response);
                // Update the count
                
                $(response.data.shop).each(function (index, val) {
                    
                    console.log(val);
                    images = JSON.parse(val.images);

                    var shopHtml = `
                    <div class="col-lg-3"  style="display: block;">
                        <div class="product-box">
                            <div class="img-wrapper">

                                <div class="front">
                                    <a href="{{ url('product-details')}}/${val.category.slug}/${val.slug}/${val.cat_id}">
                                        <img src="{{ asset('upload/product') }}/${images[0]}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="{{ url('product-details/')}}/${val.category.slug}/${val.slug}/${val.cat_id}">
                                        <img src="{{ asset('upload/product') }}/${images[1]}" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>
                                </div>

                                <div class="cart-info cart-wrap">
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </button>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                    <a href="{{ url('product-details/')}}/${val.category.slug}/${val.slug}/${val.cat_id}"  title="Quick View">
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
                                    <h6 style="color: #f39910;">${val.category.title}</h6>
                                </a>
                                <a href="{{ url('product-details/')}}/${val.category.slug}/${val.slug}/${val.cat_id}">
                                    <h6>${val.product_name}</h6>
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
                                    <h4><del>${val.price}</del></h4>
                                    <h4 style="margin-left: 20px;">${val.selling_price}</h4>
                                    <h5 style="margin-left: 20px; color: #f39910;">{{ $discountPercentage }}% Off</h5>
                                </div>
                            </div>                                                          
                        </div>
                    </div>`;
                    console.log(shopHtml);

                    $('#margin-res').append(shopHtml);
                });
                }
            });

        });
    });
</script>
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
