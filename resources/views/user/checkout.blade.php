@extends('layouts.front') 
@section('title') 
Checkout
@endsection 
@section('content')
<style>
    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: transparent;
        background-clip: border-box;
        border: unset;
        border-radius: 0.25rem;
    }
</style>
<div class="breadcrumb-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<nav aria-label="breadcrumb" class="theme-breadcrumb">
					<ol class="breadcrumb justify-content-start">
						<li class="breadcrumb-item"><a href="{{ url('/') }}" previewlistener="true">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('cart') }}" previewlistener="true">Cart</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="section-b-space">
    <div class="container" bis_skin_checked="1">
        <div class="checkout-page" bis_skin_checked="1">
            <div class="checkout-form" bis_skin_checked="1">
                <form action="{{ url('placeorder') }}" method="POST"  class="require-validation"data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    @csrf
                    <div class="row" bis_skin_checked="1">
                        <div class="col-lg-6 col-sm-12 col-xs-12" bis_skin_checked="1">
                            <div class="checkout-title" bis_skin_checked="1">
                                <h3>Billing Details</h3>
                            </div>
                            <div class="row check-out" bis_skin_checked="1">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                                    <div class="field-label" bis_skin_checked="1">First Name</div>
                                    <input type="text" name="fname" value="" placeholder="" fdprocessedid="ketqx1m">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                                    <div class="field-label" bis_skin_checked="1">Last Name</div>
                                    <input type="text" name="lname" value="" placeholder="" fdprocessedid="tjlwjc">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                                    <div class="field-label" bis_skin_checked="1">Email</div>
                                    <input type="text" name="email" value="" placeholder="" fdprocessedid="tdfrof">
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                                    <div class="field-label" bis_skin_checked="1">Phone</div>
                                    <input type="text" name="phone" value="" placeholder="" fdprocessedid="dxcvu9">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                                    <div class="field-label" bis_skin_checked="1">Country</div>
                                    <select fdprocessedid="j6k0f" name="country">
                                        <option>Pakistan</option>
                                        <option>South Africa</option>
                                        <option>United State</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                                    <div class="field-label" bis_skin_checked="1">Address</div>
                                    <input type="text" name="address" value="" placeholder="Street address" fdprocessedid="xrpdm">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                                    <div class="field-label" bis_skin_checked="1">Town/City</div>
                                    <input type="text" name="city" value="" placeholder="" fdprocessedid="opocc3">
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12" bis_skin_checked="1">
                                    <div class="field-label" bis_skin_checked="1">State / County</div>
                                    <input type="text" name="state" value="" placeholder="" fdprocessedid="okhx3d">
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12" bis_skin_checked="1">
                                    <div class="field-label" bis_skin_checked="1">Postal Code</div>
                                    <input type="text" name="zipcode" value="" placeholder="" fdprocessedid="9lkku">
                                </div>
                                <div class="form-group col-md-12 col-sm-6 col-xs-12" bis_skin_checked="1">
                                    <div class="field-label" bis_skin_checked="1">Order Note</div>
                                    <input type="text" name="order_note" value="" placeholder="" fdprocessedid="9lkku">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" bis_skin_checked="1">
                            <div class="checkout-details" bis_skin_checked="1">
                                <div class="order-box" bis_skin_checked="1">
                                    <div class="title-box" bis_skin_checked="1">
                                        <div bis_skin_checked="1">Total Item <span>x {{$cartitem->count()}}</span></div>
                                    </div>
                                    <div class="title-box" bis_skin_checked="1">
                                        <div bis_skin_checked="1">Product <span>Total</span></div>
                                    </div>
                                    <ul class="qty">
                                        @foreach($cartitem as $val)
                                        @php
                                            @$price = $val->products->selling_price * $val->prod_qty;
                                            @$total += $val->products->selling_price * $val->prod_qty;
                                        @endphp
                                        <li>{{ $val->products->product_name }} (× {{ $val->prod_qty }}) <span>${{@$price}}</span></li>
                                        @endforeach
                                    </ul>
                                    <ul class="total">
                                        <li>Total <span class="count">${{@$total}}</span></li>
                                    </ul>
                                    <input type="hidden" name="total_price" value="{{@$total}}">
                                </div>
                                <div class="payment-box" bis_skin_checked="1">
                                    <div class="upper-box" bis_skin_checked="1">
                                        <div class="payment-options" bis_skin_checked="1">
                                            <ul>
                                                <li>
                                                    <div class="radio-option" bis_skin_checked="1">
                                                        <input type="radio" checked class="payment-radio" name="payment_method" value="cod" id="payment-2">
                                                        <label for="payment-2">Cash On Delivery</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="radio-option paypal" bis_skin_checked="1">
                                                        <input type="radio" class="payment-radio" name="payment_method" value="card" id="payment-3">
                                                        <label for="payment-3">Pay With Card<span class="image"><img src="{{asset('assets/images/paypal.PNG')}}" alt=""></span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-box" bis_skin_checked="1">
                                    <div  id="card-payment-form" style="display: none;">
                                        <div class="panel panel-default credit-card-box">
                                            <div class="panel-body">
                                                <div class='form-row row'>
                                                    <div class='col-xs-12 form-group required'>
                                                        <label class='control-label'>Name on Card</label> <input
                                                            class='form-control' size='4' type='text'>
                                                    </div>
                                                </div>
                            
                                                <div class='form-row row'>
                                                    <div class='col-xs-12 form-group card required'>
                                                        <label class='control-label'>Card Number</label> <input
                                                            autocomplete='off' class='form-control card-number' size='20'
                                                            type='text'>
                                                    </div>
                                                </div>
                            
                                                <div class='form-row row'>
                                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                        <label class='control-label'>CVC</label> <input autocomplete='off'
                                                            class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                            type='text'>
                                                    </div>
                                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                        <label class='control-label'>Expiration Month</label> <input
                                                            class='form-control card-expiry-month' placeholder='MM' size='2'
                                                            type='text'>
                                                    </div>
                                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                        <label class='control-label'>Expiration Year</label> <input
                                                            class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                            type='text'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div id="payment-message" class="hidden"></div>
                                    <div class="text-end" bis_skin_checked="1"><button class="btn-solid btn">Place Order</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection 
@section('script')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
   $(function() {

    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            paymentMethod = $("input[name='payment_method']:checked").val(), // Assuming you have a radio button for payment_method
            $errorMessage = $form.find('div.error'),
            valid = true;

        $errorMessage.addClass('hide');

        $('.has-error').removeClass('has-error');

        if (paymentMethod === 'cod') {
            // If COD is selected, do not proceed with Stripe token creation
            return;
        }

        var inputSelector = ['input[type=email]', 'input[type=password]',
            'input[type=text]', 'input[type=file]',
            'textarea'].join(', '),
            $inputs = $form.find('.required').find(inputSelector);

        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });

        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }

    });

    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];

            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }

});

</script>     

@endsection 
