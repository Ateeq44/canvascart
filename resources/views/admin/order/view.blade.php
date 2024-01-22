@extends('layouts.admin')
<title>Order View</title>

@section('content')

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col card">
                <div class="card-header">
                    <div class="row w-100">
                        <div>
                            <h1>Invoice:  {{$orders->tracking_no}}</h1>
                        </div>
                        <div class="col-md-6 px-4 py-3">
                            <div class="d-flex">
                                <h2>User Name :</h2>
                                <h3 class="ms-3">{{$orders->fname}} {{$orders->lname}}</h3>
                            </div>
                            
                            <div class="d-flex">
                                <h2>Address:</h2>
                                <h3 class="ms-3">{{$orders->address}}</h3>
                            </div>
                            
                            <div class="d-flex">
                                <h2>State:</h2>
                                <h3 class="ms-3">{{$orders->state}}</h3>
                            </div>

                            <div class="d-flex">
                                <h2>Zipcode:</h2>
                                <h3 class="ms-3">{{$orders->zipcode}}</h3>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <h2>User email:</h2>
                                <h3 class="ms-3">{{$orders->email}}</h3>
                            </div>
                            <div class="d-flex">
                                <h2>City:</h2>
                                <h3 class="ms-3">{{$orders->city}}</h3>
                            </div>
                            <div class="d-flex">
                                <h2>Country:</h2>
                                <h3 class="ms-3">{{$orders->country}}</h3>
                            </div>
                            <div class="d-flex">
                                <h2>Status:</h2>
                                @if($orders->status == '0')
                                <h3 class="ms-3">New Order</h3>
                                @elseif($orders->status == '1')
                                <h3 class="ms-3">Preparing to ship</h3>
                                @elseif($orders->status == '2')
                                <h3 class="ms-3">Shipped</h3>
                                @else
                                <h3 class="ms-3">Delivered</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter table-mobile-md card-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th class="w-1">Price</th>
                                    <th class="w-1">QTY</th>
                                    <th class="w-1">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($orders->order_item as $key => $val)
                                @php
                                $image = json_decode($val->product->images);
                                $total = $val->price * $val->qty;
                                @endphp
                                <tr class="">
                                    <th scope="row">{{++$key}}</th>
                                    <td scope="row"><img style="width: 100px; height:auto;" src="{{asset('upload/product/'.$image[0])}}" alt=""></td>
                                    <td scope="row">{{$val->product->product_name}}</td>
                                    <td scope="row">{{$val->color}}</td>
                                    <td scope="row">{{$val->size}}</td>
                                    <td scope="row">{{$val->price}}</td>
                                    <td scope="row">{{$val->qty}}</td>
                                    <td scope="row">{{$total}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end">
                        <h1 class="mt-5">
                            Grand Total : ${{$orders->total_price}}.00/-                            
                        </h1>
                    </div>
                    <hr>
                    <div class="">
                        <h1 class="mt-3">
                            Update Order                          
                        </h1>
                        <form action="{{ url('admin/orders/update/'.$orders->id) }}" method="post">
                            @csrf
                            <select name="status" class="form-control w-25">
                                <option value="0" @if($orders->status == '0') selected @endif>New Order</option>
                                <option value="1" @if($orders->status == '1') selected @endif>Prepare to Ship</option>
                                <option value="2" @if($orders->status == '2') selected @endif>Shipped</option>
                                <option value="3" @if($orders->status == '3') selected @endif>Delivered</option>
                            </select>
                                           
                            <button class="btn btn-success mt-3" type="submit">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection