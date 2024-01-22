@extends('layouts.front') 
@section('title') 
Tracking Order
@endsection 
@section('content') 
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-start">
                        <li class="breadcrumb-item"><a href="index.html" previewlistener="true">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tracking Order</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="tracking-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>status for order no: {{ $tracking_order->tracking_no }}</h3>
                <div class="row border-part">
                    <div class="col-xl-2 col-md-3 col-sm-4">
                        <div class="product-detail">
                            <img src="../assets/images/fashion/pro/1.jpg" class="img-fluid blur-up lazyloaded" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-sm-8">
                        <div class="tracking-detail">
                            <ul>
                                <li>
                                    <div class="left">
                                        <span>Order name</span>
                                    </div>
                                    <div class="right">
                                        <span>{{Auth::User()->name}}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <span>customer number</span>
                                    </div>
                                    <div class="right">
                                        <span>{{ $tracking_order->tracking_no }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <span>order date</span>
                                    </div>
                                    <div class="right">
                                        <span>{{date('d M Y', strtotime($tracking_order->created_at));}}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <span>shipping address</span>
                                    </div>
                                    <div class="right">
                                        <span>{{ $tracking_order->address }} {{ $tracking_order->state }} {{ $tracking_order->country }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <span>carrier</span>
                                    </div>
                                    <div class="right">
                                        <span>FedEx</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4">
                        <div class="order-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55107.59629446948!2d-97.77629221286301!3d30.316123884942762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8644ca7d7a2a6d0d%3A0x209a4c2782a39461!2sCentral%20Market!5e0!3m2!1sen!2sin!4v1607754725548!5m2!1sen!2sin" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div class="arrow-steps clearfix">
                        @if($tracking_order->status == "0")
                        <div class="step current"> <span> order placed</span> </div>
                        <div class="step"> <span>preparing to ship</span> </div>
                        <div class="step"><span> shipped</span> </div>
                        <div class="step"><span>delivered</span> </div>
                        @elseif($tracking_order->status == "1")
                        <div class="step"> <span><i class="fa-solid fa-check"></i> order placed</span> </div>
                        <div class="step current"> <span>preparing to ship</span> </div>
                        <div class="step"><span> shipped</span> </div>
                        <div class="step"><span>delivered</span> </div>
                        @elseif($tracking_order->status == "2")
                        <div class="step"> <span><i class="fa-solid fa-check"></i> order placed</span> </div>
                        <div class="step"> <span><i class="fa-solid fa-check"></i> preparing to ship</span> </div>
                        <div class="step current"><span> shipped</span> </div>
                        <div class="step"><span>delivered</span> </div>
                        @elseif($tracking_order->status == "3")
                        <div class="step"> <span><i class="fa-solid fa-check"></i> order placed</span> </div>
                        <div class="step"> <span><i class="fa-solid fa-check"></i> preparing to ship</span> </div>
                        <div class="step"><span><i class="fa-solid fa-check"></i> shipped</span> </div>
                        <div class="step current"><span>delivered</span> </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection 

