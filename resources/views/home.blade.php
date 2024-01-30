@extends('layouts.front')

@section('title')
Canvas Cart
@endsection

@section('content')

<!-- Home slider -->
<section class="p-0">
    <div class="slide-1 home-slider">
        <div>
            <div class="home  text-center">
                <img src="{{asset('assets/images/1.jpg')}}" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>Save 30%</h4>
                                    <h1>Must Have</h1>
                                    <a href="{{ url('shop') }}" class="btn btn-solid">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="home text-center">
                <img src="{{asset('assets/images/2.jpg')}}" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>Save 30%</h4>
                                    <h1>Special Price</h1>
                                    <a href="{{ url('shop') }}" class="btn btn-solid">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home slider end -->
<section class="section-b-space pt-0 ratio_asos mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="product-4 product-m no-arrow">
                    @foreach($category as $val)
                    @php
                    $images = json_decode($val->image)
                    @endphp
                    <div class="media" style="display: flex;">
                        <a href="{{url('products_category/'.$val->id)}}" tabindex="0" previewlistener="true">
                            <img style="width: 200px; height:220px;" class="img-fluid blur-up lazyloaded" src="{{asset('upload/category/'.$images[0])}}" alt="">
                        <div class="media-body align-self-center mt-3">
                            <h3>{{ $val->title }}</h3>
                            <h4>Count: {{ $val->products_count }}</h4>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
<div class="title6 section-t-space">
    <h2 class="">Recent collection</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="product-para">
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="bag-product pt-0 section-b-space ratio_square">
    <div class="container">
        <div class="row row-cols-xxl-6 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gy-sm-4 gy-3">
            @foreach($recentProducts as $val)
            <div class="product-box product-wrap product-style-3">
                <div class="img-wrapper">
                    @php
                    $images = json_decode($val['images']);
                    @endphp
                    <div class="front">
                        <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                            <img src="{{asset('upload/product/'.$images[0])}}" class="img-fluid blur-up lazyload bg-img" alt="">
                        </a>
                    </div>
                    <div class="back">
                        <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                            <img src="{{asset('upload/product/'.$images[1])}}" class="img-fluid blur-up lazyload bg-img" alt="">
                        </a>
                    </div>
                    <div class="cart-detail">
                        <a href="javascript:void(0)" title="Add to Wishlist">
                            <i style="color: #f39910;" class="fa-solid fa-heart"></i>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View">
                            <i style="color: #f39910;" class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
                <div class="product-info">
                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                    <a href="{{url('products_category/'.$val->cat_id)}}">
                        <h6 style="color: #f85606;">{{$val->category->title}}</h6>
                    </a>
                    <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                        <h6>{{$val->product_name}}</h6>
                    </a>
                    <?php
                    if (is_numeric($val->price) && is_numeric($val->selling_price) && $val->price != 0) {
                        $discountPercentage = round((($val->price - $val->selling_price) / $val->price) * 100);
                    } else {
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
            @endforeach
        </div>
    </div>
</section>
<div class="title6 section-t-space">
    <h2 class="">Feature collection</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="product-para">
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="bag-product pt-0 section-b-space ratio_square">
    <div class="container">
        <div class="row row-cols-xxl-6 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gy-sm-4 gy-3">
            @foreach($is_feature as $val)
            <div class="product-box product-wrap product-style-3">
                <div class="img-wrapper">
                    @php
                    $images = json_decode($val['images']);
                    @endphp
                    <div class="front">
                        <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                            <img src="{{asset('upload/product/'.$images[0])}}" class="img-fluid blur-up lazyload bg-img" alt="">
                        </a>
                    </div>
                    <div class="back">
                        <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                            <img src="{{asset('upload/product/'.$images[1])}}" class="img-fluid blur-up lazyload bg-img" alt="">
                        </a>
                    </div>
                    <div class="cart-detail">
                        <a href="javascript:void(0)" title="Add to Wishlist">
                            <i style="color: #f39910;" class="fa-solid fa-heart"></i>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View">
                            <i style="color: #f39910;" class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </div>
                </div>
                <div class="product-info">
                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                    <a href="{{url('products_category/'.$val->cat_id)}}">
                        <h6 style="color: #f85606;">{{$val->category->title}}</h6>
                    </a>
                    <a href="{{ url('product-details/'.$val->category->slug.'/'.$val->slug.'/'.$val->cat_id) }}">
                        <h6>{{$val->product_name}}</h6>
                    </a>
                    <?php
                    if (is_numeric($val->price) && is_numeric($val->selling_price) && $val->price != 0) {
                        $discountPercentage = round((($val->price - $val->selling_price) / $val->price) * 100);
                    } else {
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
            @endforeach
        </div>
    </div>
</section>


@endsection
