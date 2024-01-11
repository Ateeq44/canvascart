@extends('layouts.front') 
@section('title') 
Cart
@endsection 
@section('content')
	<style type="text/css">
		.cart-section tbody tr td{
			min-width: 182px !important;
		}
	</style>
	<div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb justify-content-start">
                            <li class="breadcrumb-item"><a href="index.html" previewlistener="true">Home</a></li>
                            <li class="breadcrumb-item active">cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                {{-- <div class="col-sm-12">
                    <div class="cart_counter">
                        <div class="countdownholder">
                            Your cart will be expired in<span id="timer">14:10</span> minutes!
                        </div>
                        <a href="checkout.html" class="cart_checkout btn btn-solid btn-xs" previewlistener="true">check out</a>
                    </div>
                </div> --}}
                <div class="col-sm-12 table-responsive-xs">
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">#</th>
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">Color</th>
                                <th scope="col">Size</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">total</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($cartitem as $key => $val)
                        	@php
                        		$images = json_decode($val->products->images);
                        	@endphp
                            <tr>
                            	<td>{{ ++$key }}</td>
                                <td>
                                    <img style="width: 150px;" src="{{ asset('upload/product/'.$images[0]) }}" alt="">
                                </td>
                                <td>{{ $val->products->product_name }}</td>
                                <td>{{ $val->color }}</td>
                                <td>{{ $val->size }}</td>
                                <td>
                                    <h2>${{ $val->products->selling_price }}</h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="{{ $val->prod_qty }}" fdprocessedid="vow9wn">
                                        </div>
                                    </div>
                                </td>
                                
                                <td>
                                    <h2 class="td-color">$4539.00</h2>
                                </td>
                                <td><a href="#" class="icon"><i class="fa-solid fa-x"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="table-responsive-md">
                        <table class="table cart-table ">
                            <tfoot>
                                <tr>
                                    <td>total price :</td>
                                    <td>
                                        <h2>$6935.00</h2>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-6"><a href="#" class="btn btn-solid">continue shopping</a></div>
                <div class="col-6"><a href="#" class="btn btn-solid">check out</a></div>
            </div>
        </div>
    </section>

@endsection 
