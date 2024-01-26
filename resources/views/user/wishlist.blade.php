@extends('layouts.front') 
@section('title') 
Wishlist
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
						<li class="breadcrumb-item active">Wishlist</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>
<section class="cart-section section-b-space">
	@if(!$wishlist->isEmpty())
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
                				<th scope="col">action</th>
                			</tr>
                		</thead>
                		<tbody>
                			@foreach($wishlist as $key => $val)
                			@php
                			$images = json_decode($val->wishlist->images);
                			@endphp
                			<tr>
                				<td>{{ ++$key }}</td>
                				<td>
                					<img style="width: 150px;" src="{{ asset('upload/product/'.$images[0]) }}" alt="">
                				</td>
                				<td>{{ $val->wishlist->product_name }}</td>
                				<td>{{ $val->color }}</td>
                				<td>{{ $val->size }}</td>
                				<td>
                					<h2>${{ $val->wishlist->selling_price }}</h2>
                				</td>
                				<td>
                					<div class="qty-box" bis_skin_checked="1">
                						<div class="input-group" bis_skin_checked="1">
                							<form action="{{url('decrease/'.$val->id)}}" method="get" accept-charset="utf-8">
                								<span class="input-group-prepend decrease">
                									<button id="" type="button" class="btn quantity-left-minus" data-type="minus" data-field="" fdprocessedid="hqd1z">
                										<i class="fa-solid fa-minus"></i>
                									</button> 
                								</span>
                							</form>
                							<input type="text" name="quantity" class="form-control input-number quantity" value="{{ $val->prod_qty }}" fdprocessedid="rogv2">
                							<form action="{{url('decrease/'.$val->id)}}" method="get" accept-charset="utf-8">
                								<span class="input-group-prepend increase">
                									<button id="" type="button" class="btn quantity-right-plus" data-type="plus" data-field="" fdprocessedid="a2hh48">
                										<i class="fa-solid fa-plus"></i>
                									</button>
                								</span>
                							</form>
                						</div>
                					</div>
                				</td>
                				<td>
                                    <button type="button" class="btn btn-solid px-3 py-2 " style="font-size:25px ;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </button>
                					<button type="button" class="btn btn-solid px-3 py-2" style="font-size:25px ;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                						<i class="fa-solid fa-trash-can"></i>
                					</button>
                				</td>
                                <td></td>
                                <td></td>
                                <td></td>
                			</tr>

                			@endforeach
                		</tbody>
                	</table>
                </div>
            </div>
            <div class="row cart-buttons">
            	<div class="col-6" style="text-align: left !important;"><a href="{{url('shop')}}" class="btn btn-solid" >continue shopping</a></div>
            </div>
        </div>
        @else
        <div class="container">
        	<div class="row">
        		<div class="col-md-12 d-flex justify-content-center">
        			<div>
        				<h3>
        					Your Wishlist is Empty!
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
    				<h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Wishlist Item</h1>
    				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    			</div>
    			<div class="modal-body">
    				Do you want to delete this item.
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-secondary py-2 px-3" data-bs-dismiss="modal">No</button>
    				<a class="btn btn-solid py-2 px-3"  href="{{url('wishlist-delete/'.@$val->id)}}">
    					Yes
    				</a>
    			</div>
    		</div>
    	</div>
    </div>
    @endsection 
    @section('script')
    <script type="text/javascript">
        $(document).ready(function(){

        $('.addTocartBtn').click(function(e){
            e.preventDefault();
            var product_id = $(this).closest('.prod_data').find('.prod_id').val();
            var product_qty = $(this).closest('.prod_data').find('.input-number').val();
            var color = $(this).closest('.prod_data').find('.color:checked').val();
            var size = $(this).closest('.prod_data').find('.size:checked').val();
            alert
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "GET",
                url: "{{ url('add-to-cart')}}"+"/",
                data: {
                    'product_id' : product_id,
                    'product_qty' : product_qty,
                    'color' : color,
                    'size' : size,
                },
                success: function (response){
                    swal(response.status);

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    // alert(errorThrown)
                    if(errorThrown == 'Unauthorized'){
                        swal('Login to continue')
                    }
                }

            });
            // 45
        });
    </script>
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
