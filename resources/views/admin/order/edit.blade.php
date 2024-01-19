@extends('layouts.admin')
<title>Order View</title>

@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col card">
                <div class="card-header">
                    <div class="row w-100">
                        <h2 class="page-title">Order Edit</h2>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-home-1" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab">New Order</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-profile-1" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">Prepare to Ship</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-profile-2" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">Shipped</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#tabs-profile-3" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">Delivered</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-5">
                        <div class="tab-pane active show" id="tabs-home-1" role="tabpanel">
                            <div>
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
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-1" role="tabpanel">
                            <div>Fringilla egestasafs nunc quis tellus diam rhoncus ultricies tristique affaenim at diam, sem nunc amet, pafasfellentesque id egestas velit sed</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-2" role="tabpanel">
                            <div>Fringilla egestas nunc quiasfs teafafafllus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                        </div>
                        <div class="tab-pane" id="tabs-profile-3" role="tabpanel">
                            <div>Fringilla efgsadfestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet,fdas pellentesque id egestas favelit sed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection