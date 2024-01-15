@extends('layouts.front') 
@section('title') 
Category
@endsection 
@section('content') 
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb" style="justify-content: flex-start;">
                        <li class="breadcrumb-item"><a href="index.html" previewlistener="true">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="collection-product-wrapper">
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                              @foreach($category as $val)
                                                @php
                                                  $images = json_decode($val->image)
                                                @endphp
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;../assets/images/pro3/35.jpg&quot;); background-size: cover; background-position: center center; display: block;">
                                                                  <img src="{{ asset('upload/category/'.$images[0]) }}" class="img-fluid blur-up bg-img lazyloaded" alt="" style="display: none;">
                                                                </a>
                                                            </div> 
                                                        </div>
                                                        <div class="product-detail d-flex" style="justify-content: space-between;">
                                                            <div>
                                                                <a href="{{ url('products_category/'.$val->id) }}" previewlistener="true">
                                                                    <h6>{{ $val->title }}</h6>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <a href="product-page(no-sidebar).html" previewlistener="true">
                                                                    <h6>({{ $val->products_count }})</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                              @endforeach
                                            </div>
                                        </div>
                                        {{-- <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="container-fluid p-0">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <nav aria-label="Page navigation">
                                                                <ul class="pagination">
                                                                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <div class="product-search-count-bottom">
                                                                <h5>Showing Products 1-24 of 10 Result</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
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