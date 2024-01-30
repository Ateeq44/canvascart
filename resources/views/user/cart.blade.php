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
	@if(!$cartitem->isEmpty())
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
                					<div class="qty-box" bis_skin_checked="1">
                						<div class="input-group" bis_skin_checked="1">
                								<span class="input-group-prepend decrease">
                									<button id="" type="button" class="btn quantity-left-minus" data-type="minus" data-field="" fdprocessedid="hqd1z">
                										<i class="fa-solid fa-minus"></i>
                									</button> 
                								</span>
                							<input type="text" name="quantity" class="form-control input-number quantity" value="{{ $val->prod_qty }}" fdprocessedid="rogv2">
                								<span class="input-group-prepend increase">
                									<button id="" type="button" class="btn quantity-right-plus" data-type="plus" data-field="" fdprocessedid="a2hh48">
                										<i class="fa-solid fa-plus"></i>
                									</button>
                								</span>
                						</div>
                					</div>
                				</td>
                				@php
                				@$price = $val->products->selling_price * $val->prod_qty;
                				@$total += $val->products->selling_price * $val->prod_qty;
                				@endphp
                				<td>
                					<h2 class="td-color">${{$price}}</h2>
                				</td>
                				<td>
                					<button type="button" class="btn btn-solid px-3 py-2" style="font-size:25px ;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                						<i class="fa-solid fa-trash-can"></i>
                					</button>
                				</td>
                			</tr>
                			@endforeach
                		</tbody>
                	</table>
                	<div class="table-responsive-md">
                		<table class="table cart-table ">
                			<tfoot>
                				<tr>
                					<td>Total Price :</td>
                					<td>
                						<h2>${{@$total}}</h2>
                					</td>
                				</tr>
                			</tfoot>
                		</table>
                	</div>
                </div>
            </div>
            <div class="row cart-buttons">
            	<div class="col-6"><a href="{{url('shop')}}" class="btn btn-solid">continue shopping</a></div>
            	<div class="col-6"><a href="{{ url('checkout') }}" class="btn btn-solid">check out</a></div>
            </div>
        </div>
        @else
        <div class="container">
        	<div class="row">
        		<div class="col-md-12 d-flex justify-content-center">
        			<div>
        				<h3>
        					Your Cart is Empty!    
        				</h3>
        				<div class="col-12 mt-5"><a href="{{url('shop')}}" class="btn btn-solid">continue shopping</a></div>
        			</div>
        		</div>
        	</div>
        </div>
        @endif

    </section>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Cart Item</h1>
    				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    			</div>
    			<div class="modal-body">
    				Do you want to delete this item.
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-secondary py-2 px-3" data-bs-dismiss="modal">No</button>
    				<a class="btn btn-solid py-2 px-3"  href="{{url('cart-delete/'.@$val->id)}}">
    					Yes
    				</a>
    			</div>
    		</div>
    	</div>
    </div>
    @endsection 
    @section('script')
    <script>
    	$(document).ready(function(){
            // Open modal
    		$(".Show-Modal").click(function(){
    			$("#exampleModal1").css("display", "block");
    		});

            // Close modal
    		$(".closeModalBtn").click(function(){
    			$("#exampleModal1").css("display", "none");
    		});
    	});
    </script>
    <script>
    	$(document).ready(function () {        
    		$('.input-group').each(function () {
    			const decreaseButton = $(this).find('.decrease');
    			const increaseButton = $(this).find('.increase');
    			const quantityInput = $(this).find('.quantity');

    			decreaseButton.on('click', function () {
    				let currentQuantity = parseInt(quantityInput.val(), 10);
    				if (currentQuantity > 1) {
    					quantityInput.val(currentQuantity - 1);
    					console.log("Clicked Decrease. Current Quantity: " + quantityInput.val());
    				}
    			});

    			increaseButton.on('click', function () {
    				let currentQuantity = parseInt(quantityInput.val(), 10);
    				quantityInput.val(currentQuantity + 1);
    				console.log("Clicked Increase. Current Quantity: " + quantityInput.val());
    			});
    		});
    	});

    </script>

    @endsection 
