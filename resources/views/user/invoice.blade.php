@extends('layouts.invoice') 
@section('title') 
Order Invoice
@endsection 
@section('content') 
<section class="theme-invoice-4 section-b-space">
    <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="col-xl-9 m-auto" bis_skin_checked="1">
                <div class="invoice-wrapper" bis_skin_checked="1">
                    <div class="invoice-header" bis_skin_checked="1">
                        <img src="{{asset('assets/images/bg3.jpg')}}" class="background-invoice">
                        <img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="logo">
                    </div>
                    <div class="invoice-body" bis_skin_checked="1">
                        <div class="top-sec" bis_skin_checked="1">
                            <div class="row" bis_skin_checked="1">
                                <div class="col-xxl-8 col-md-7" bis_skin_checked="1">
                                    <ul class="date-detail">
                                        <li><span>Name :</span>
                                            <h4> {{$order->fname}} {{$order->lname}}</h4>
                                        </li>
                                        <li><span>email :</span>
                                            <h4> {{$order->email}}</h4>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xxl-4 col-md-5" bis_skin_checked="1">
                                    <ul class="date-detail">
                                        <li><span>issue date :</span>
                                            <h4> {{date('d M Y', strtotime($order->created_at));}}</h4>
                                        </li>
                                        <li><span>invoice no :</span>
                                            <h4>{{$order->tracking_no}}</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="title-sec" bis_skin_checked="1">
                            <h2 class="title">invoice</h2>
                            <div class="row" bis_skin_checked="1">
                                <div class="col-6" bis_skin_checked="1">
                                    <a href="#" class="btn black-btn btn-solid" onclick="window.print();">export as
                                        PDF</a>
                                </div>
                                <div class="col-6 text-end" bis_skin_checked="1">
                                    <a href="#" class="btn btn-solid" onclick="window.print();">print</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-sec" bis_skin_checked="1">
                            <div class="table-responsive-md" bis_skin_checked="1">
                                <table class="table table-borderless table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">title</th>
                                            <th scope="col">Color</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">price</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order->order_item as $key => $item)
                                        @php
                                        $total = $item->price * $item->qty;

                                        $images = json_decode($item->product->images);
                                        @endphp
                                        <tr>
                                            <th scope="row">{{++$key}}</th>
                                            <td><img style="width:110px; height:100px;" src="{{asset('upload/product/'.$images[0])}}" alt=""></td>
                                            <td>{{$item->product->product_name}}</td>
                                            <td>{{$item->color}}</td>
                                            <td>{{$item->size}}</td>
                                            <td>${{$item->price}}.00</td>
                                            <td>{{$item->qty}}</td>
                                            <td>${{$total}}.00</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-end" bis_skin_checked="1">
                                <div class="table-footer" bis_skin_checked="1">
                                    <span class="me-5 font-bold">Grand Total</span>
                                    <span class="font-bold">${{$order->total_price}}.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-footer" bis_skin_checked="1">
                        <img src="../assets/images/invoice/shape.png" class="img-fluid design-shape" alt="">
                        <ul>
                            <li>
                                <i class="fa fa-map" aria-hidden="true"></i>
                                <div bis_skin_checked="1">
                                    <h4>multikart demo store</h4>
                                    <h4>USA, 362351</h4>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div bis_skin_checked="1">
                                    <h4>+1-202-555-0144</h4>
                                    <h4>+1-202-555-0117</h4>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <div bis_skin_checked="1">
                                    <h4>support@multikart.com</h4>
                                    <h4>demo@multikart.com</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection 
@section('script')
<script type="text/javascript">


</script> 
@endsection 
