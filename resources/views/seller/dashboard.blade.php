@extends('layouts.seller-info') 
@section('title') 
Dashboard
@endsection 
@section('content')
<style type="text/css">
	.dropdown-menu{
		margin: 0.125rem -90px 0 !important;
	}
	.nav-link.dropdown-toggle{
		color: white !important;
	}
	.dropdown-item{
		color: black !important;
	}
	.dropdown-item.active, .dropdown-item:active {
		color: black;
		text-decoration: none;
		background-color: white;
	}
	.dot{
		width: 25px;
		height: 25px;
		border-radius: 50px;
		background: #f39910;
	}
	.dot1{
		width: 25px;
		height: 25px;
		border-radius: 50px;
		background: #ccc;
	}
	.line1 {
		width: 120px;
		height: 5px;
		background: #f39910;
	}
	.line2{
		width: 120px;
		height: 5px;
		background: #ccc;
	}
	.tooltip {
		position: relative;
		display: inline-block;
		border-bottom: 1px dotted black;
	}

	.tooltip .tooltiptext {
		visibility: hidden;
		width: 120px;
		background-color: black;
		color: #fff;
		text-align: center;
		border-radius: 6px;
		padding: 5px 0;

		/* Position the tooltip */
		position: absolute;
		z-index: 1;
	}
	.btn.focus, .btn:focus {
		outline: 0;
		box-shadow: unset;
	}
	ul li{
		list-style: disc !important;
		margin-left: 16px;
	}
</style>
<div class=""  style="background-color: #394868;">
	<div class="container">
		<nav class="navbar navbar-dark navbar-expand-sm">
			<a class="navbar-brand" href="#">
				<img src="{{asset('assets/images/seller.png')}}" alt="logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-3" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse collapse navbar-collapse d-flex justify-content-end" id="navbar-list-3">
				<ul class="navbar-nav">
					<li class="nav-item dropdown" style="list-style:none !important;">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							{{Auth::User()->name}}
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" data-toggle="modal" data-bs-target="#logout" href="{{ route('logout') }}" 
							onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form>
						</div>
					</li>   
				</ul>
			</div>
		</nav>
	</div>
</div>
<div class="container mt-5">
	<form action="{{ url('/seller-dashboard/submut') }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-md-12 mt-3" id="first">
				<div  style="display: flex; justify-content: center;">
					<div>
						<div class="d-flex align-items-center">
							<div class="dot"></div>
							<div class="line1"></div>
							<div class="line2"></div>
							<div class="dot1"></div>
							<div class="line2"></div>
							<div class="line2"></div>
							<div class="dot1"></div>
						</div>
						<div>
							Add Profile
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 70px;">
					<div class="col-md-6" style="border-right: 1px solid #ccc;">
						<h2>
							Hey {{Auth::User()->name}},  <br>
							How about we get to know you better?
						</h2>
						<div class="form-group mt-5">
							<label style="font-size: 16px;">Enter Your Store Name</label>
							<input type="text" name="store_name" class="form-control">
						</div>
						<div class="form-group mt-2">
							<label style="font-size: 16px;">Email Address</label>
							<input type="email" name="email" disabled class="form-control" value="{{ Auth::User()->email }}">
						</div>
						<div class="form-group mt-2">
							<label  style="font-size: 16px;">Mobile Number</label>
							<input type="phone" name="phone" class="form-control">
						</div>
						<div class="">
							<a class="btn text-white btn-block mt-5" style="background-color: #f39910;" id="btn">NEXT</a>
						</div>
					</div>
					<div class="col-md-6 d-flex ">
						<div>
							<h2>Important Tips</h2>
							<ul>
								<li>Please Dont use 'Daraz' in Store Name for for example 'Daraz Hub' etc</li>
								<li>Use correct email address for example 'shopname@gmail.com'</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 mt-3" id="second" style="display: none !important;">

				<div  style="display: flex; justify-content: center;">
					<div>
						<div class="d-flex align-items-center">
							<div class="dot"></div>
							<div class="line1"></div>
							<div class="line1"></div>
							<div class="dot"></div>
							<div class="line1"></div>
							<div class="line2"></div>
							<div class="dot1"></div>
						</div>
						<div style="text-align: center !important;">
							Add Address
						</div>
					</div>
				</div>
				<a class="btn pl-0" style="margin-top: 70px;"><i class="fa-solid fa-chevron-left"></i> Back</a>
				<div class="row mt-3">
					<div class="col-md-6" style="border-right: 1px solid #ccc;">
						<h2>
							Address Information
						</h2>
						<div class="form-group mt-5">
							<label  style="font-size: 16px;">Country</label>
							<input type="text" class="form-control" name="country">
						</div>
						<div class="form-group mt-2">
							<label  style="font-size: 16px;">City</label>
							<input type="text" class="form-control" name="city">
						</div>
						<div class="form-group mt-2">
							<label  style="font-size: 16px;">Enter The Full Address</label>
							<textarea type="text" class="form-control" name="address"></textarea>
						</div>
						<div class="">
							<a class="btn text-white btn-block mt-5" style="background-color: #f39910;" id="btn1">NEXT</a>
						</div>
					</div>
					<div class="col-md-6 d-flex">
						<div>
							<h2>Important Tips</h2>
							<ul>
								<li>Please enter your business address if you are not an individual seller.</li>
								<li>Please enter the full address(include house floor/unit number/shop name, street & road) For example, House number 23A, Street No. 4, Model Town, Lahore.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-3" id="third" style="display: none !important;">
				<div  style="display: flex; justify-content: center;">
					<div>
						<div class="d-flex align-items-center">
							<div class="dot"></div>
							<div class="line1"></div>
							<div class="line1"></div>
							<div class="dot"></div>
							<div class="line1"></div>
							<div class="line1"></div>
							<div class="dot"></div>
						</div>
						<div style="text-align: right !important;">
							Verify ID & Bank
						</div>
					</div>
				</div>
				<a class="btn pl-0" style="margin-top: 70px;"><i class="fa-solid fa-chevron-left"></i> Back</a>
				<div class="row mt-3">
					<div class="col-md-6" style="border-right: 1px solid #ccc;">
						<h2>
							ID & Bank Account Information
						</h2>
						<h4>Let us know about your bank information, don’t worry we’ll keep this information confidential.</h4>
						<h4>Verify Identification Card</h4>
						<div class="form-group mt-3">
							<label  style="font-size: 16px;">ID Card Front Side</label>
							<input type="file" class="form-control" name="id_card_front[]">
						</div>
						<div class="form-group mt-3">
							<label  style="font-size: 16px;">ID Card Back Side</label>
							<input type="file" class="form-control" name="id_card_back[]">
						</div>
						<div class="form-group mt-2">
							<label  style="font-size: 16px;">Name on ID card</label>
							<input type="text" class="form-control" name="id_card_name">
							<small>Please enter your 13 digit ID number only.</small>
						</div>
						<div class="form-group mt-2">
							<label  style="font-size: 16px;">CNIC #</label>
							<input type="text" class="form-control" name="cnic">
							<small>Please enter your 13 digit ID number only.</small>
						</div>
						<div class="form-group mt-2">
							<label  style="font-size: 16px;">Enter The Full Address</label>
							<textarea type="text" class="form-control" name="address1"></textarea>
						</div>
						<h2>Verify Bank Account</h2>
						<div class="form-group mt-2">
							<small>Upload the Front Page for Bankbook/Bank Statement/Cheque Copy/Mobile Banking Screenshot</small>
							<input type="file" class="form-control" name="bank_statement[]">
						</div>
						<div class="form-group mt-2">
							<label  style="font-size: 16px;">Account Holder Name</label>
							<input type="text" class="form-control" name="acco_holder_name">
						</div>
						<div class="form-group mt-2">
							<small  style="font-size: 16px;">Should be Alpha numeric, 24 digits field, start with PK</small>
							<input type="text" class="form-control" name="iban_no" placeholder="IBAN (ex:AA00AAAA000000000000000)">
						</div>
						<select class="js-example-basic-single" class="form-control" name="bank_name">
							<option>AL BARAKA BANK LIMITED</option>
							<option>ALLIED BANK LIMITED</option>
							<option>ASKARI BANK LIMITED</option>
							<option>BANK AL FALAH LIMITED</option>
							<option>BANK AL HABIB LIMITED</option>
							<option>BANK ISLAMI LIMITED</option>
							<option>BURJ BANK</option>
							<option>DUBAI ISLAMIC BANK PAKISTAN LIMITED</option>
							<option>FAYSAL BANK LIMITED</option>
							<option>HABIB BANK LIMITED</option>
							<option>HABIB METROPOLITAN BANK</option>
							<option>JS BANK LIMITED</option>
							<option>MCB BANK LIMITED</option>
							<option>MCB ISLAMIC BANK LIMITED</option>
							<option>MEEZAN BANK LIMITED</option>
							<option>MOBILINK MICROFINANCE BANK PVT LTD</option>
							<option>MUSLIM COMMERCIAL BANK LIMITED</option>
							<option>NATIONAL BANK OF PAKISTAN</option>
							<option>SAMBA BANK</option>
							<option>SILK BANK LIMITED</option>
							<option>SINDH BANK</option>
							<option>SONERI BANK LIMITED</option>
							<option>STANDARD CHARTERED BANK </option>
							<option>SUMMIT BANK LTD</option>
							<option>TAMEER BANK</option>
							<option>TELENOR MICROFINANCE BANK</option>
							<option>THE BANK OF PUNJAB</option>
							<option>UNITED BANK LIMITED</option>
							<option>WorldFirst</option>
						</select>
						<div class="form-group mt-2">
							<label  style="font-size: 16px;">Branch Name</label>
							<input type="text" class="form-control" name="branch_name">
						</div>
						<div class="">
							<button type="submit" class="btn text-white btn-block my-5" style="background-color: #f39910;" id="btn1">Submit</button>
						</div>
					</div>
					<div class="col-md-6 d-flex">
						<div>
							<h2>Important Tips</h2>
							<ul>
								<li>Please ensure that authentic images are uploaded. Edited images will be rejected.</li>
								<li>Please ensure that the information on the documents matches with the details submitted.</li>
								<li>Please upload the correct image for the bank statement/cheque which clearly shows your name, bank name and IBAN.</li>
								<li>The names on the CNIC and on the bank statement/cheque/bankbook image should match.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection 
@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('.js-example-basic-single').select2();
	});
	$(document).ready(function(){

		$("#btn").click(function () {
			$("#first").hide();
			$("#second").show();
		});

		$("#btn1").click(function () {
			$("#first").hide();
			$("#second").hide();
			$("#third").show();

		});
	});
</script> 
@endsection 