@extends('layouts.seller-info') 
@section('title') 
Seller Center
@endsection 
@section('content')
<div id="root" >
	<div class="NewSellerLogin" >
		<div id="topSideContent" class="topSideContent flexCenterCenter"  data-spm-anchor-id="a1zawk.27642226.0.i3.159b4edfUwWjPX">
			<div class="topSideArea baseWidthStyle" >
				<div class="flexCenterCenter" >
					<img class="logoImageStyle" src="{{asset('assets/images/logo.png')}}">
				</div>
				<form  method="POST" action="{{ route('login') }}">
					@csrf
					<div class="flexTopCenter" >
						<div class="accountContent flexTopCenter" >
							<div class="accountLabelContent" >
								<div class="accountLabelTextContent" >Email or Phone</div>
								<div class="accountLabelInputContent flexCenterLeft" >
									<input id="email" type="email" class="accountInputStyle @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="accountLabelContent" >
								<div class="accountLabelTextContent" >Password</div>
								<div class="accountLabelInputContent" >
									<input id="password" type="password" class="accountInputStyle @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="forgetPasswordStyle" >Forgot your password?</div>
							</div>
						</div>
						<div class="loginButtonContent flexCenterCenter" >
							{{-- <div class="loginButtonStyle flexCenterCenter" >Login</div> --}}
							<button type="submit" class="btn loginButtonStyle flexCenterCenter">
								{{ __('Login') }}
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="registerAndBannerContent flexTopCenter" >
			<div class="positionAnchorPoint baseWidthStyle flexTopBetween"  data-spm-anchor-id="a1zawk.27642226.0.i5.159b4edfUwWjPX">
				<div  data-spm-anchor-id="a1zawk.27642226.0.i7.159b4edfUwWjPX">
					<div class="bigTitleStyle" >Sell on Pakistan’s #1 Marketplace</div>
					<div class="bigSubTitleStyle" >Create a Multikart seller account in 5 minutes and reach millions of customers today!</div>
					<img class="bigSubTitleImgStyle" src="https://gw.alicdn.com/imgextra/i2/O1CN01CbATtG1myaDFcaPFt_!!6000000005023-2-tps-1173-790.png" style="top: 285px; left: 0px; width: 520px;">
				</div>
				<div >
					<div class="registerContent"  data-spm-anchor-id="a1zawk.27642226.0.i6.159b4edfUwWjPX">
						<div class="registerContentTitleStyle"  data-spm-anchor-id="a1zawk.27642226.0.i4.159b4edfUwWjPX">Create an Account</div>
						<div class="registerContentSubTitleStyle" >Welcome! Millions of Multikart users are waiting to buy your product.</div>
						<div class="verifyCodeContent" >
							<form   method="POST" action="{{ route('register') }}">
								@csrf

								<input type="hidden" name="role" value="2">

								<input id="name" type="text" class="inputComponentStyle  mt-5 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Full Name">
								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror

								<div class="form-group" bis_skin_checked="1">
									<input id="email" type="email" class="form-control inputComponentStyle  mt-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Password">
									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								<div class="form-group" bis_skin_checked="1">
									
									<input id="password" type="password" class="form-control inputComponentStyle  mt-5 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your">
									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>

								<div class="form-group" bis_skin_checked="1">
									
									<input id="password-confirm" type="password" class="form-control inputComponentStyle  mt-5" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
								</div>

								<button type="submit" style=" border: none;" class="createAccountButtonStyle flexCenterCenter" >Create Account</button>
							</form>
						</div>
						<div class="termsContent" >
							<span class="termsTextStyle">By clicking ‘Create Account’, you’ve read and agreed to our&nbsp;</span>
							<span class="termsTextStyle underlineStyle">Terms &amp; Conditions</span>
							<span class="termsTextStyle">&nbsp;and for my personal data to be processed according to&nbsp;</span>
							<span class="termsTextStyle underlineStyle">Multikart Privacy Policy.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="whySellOnDarazContent flexTopCenter" >
			<div class="baseWidthStyle" >
				<div class="whySellOnDarazTitleStyle" >Why Sell on Multikart?</div>
				<div class="flexTopCenter" >
					<div class="whySellOnDarazPointContent flexTopCenter" >
						<img class="whySellOnDarazPointIconStyle" src="https://gw.alicdn.com/imgextra/i3/O1CN01x7m2GQ1LsdRDBgVMZ_!!6000000001355-2-tps-104-108.png">
						<div >
							<div class="whySellOnDarazPointTitleStyle" >Reach</div>
							<div class="whySellOnDarazPointValueContent" >
								<p>
									<strong>Millions of customers</strong> on Multikart, Pakistan's most visited shopping destination
								</p>
							</div>
						</div>
					</div>
					<div class="whySellOnDarazPointContent flexTopCenter" >
						<img class="whySellOnDarazPointIconStyle" src="https://gw.alicdn.com/imgextra/i2/O1CN01mH8y9s1dLo8UaJb5f_!!6000000003720-2-tps-112-112.png">
						<div >
							<div class="whySellOnDarazPointTitleStyle" >Free Registration</div>
							<div class="whySellOnDarazPointValueContent" >
								<span class="whySellOnDarazPointValueStyle">Account registration &amp; listing items for sale is </span>
								<span class="whySellOnDarazPointValueStyle fontBoldStyle">free</span>
							</div>
						</div>
					</div>

					<div class="whySellOnDarazPointContent flexTopCenter" >
						<img class="whySellOnDarazPointIconStyle" src="https://gw.alicdn.com/imgextra/i3/O1CN01zLlbgX1TrjaNqVqWo_!!6000000002436-2-tps-106-96.png">
						<div >
							<div class="whySellOnDarazPointTitleStyle" >Reliable Shipping</div>
							<div class="whySellOnDarazPointValueContent" >
								<p>
									<strong>Fast, reliable and hassle free</strong> delivery through Multikart logistic network
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="flexTopCenter" >
					<div class="whySellOnDarazPointContent flexTopCenter" >
						<img class="whySellOnDarazPointIconStyle" src="https://gw.alicdn.com/imgextra/i1/O1CN01Wlx7Xo1J4avxAwqru_!!6000000000975-2-tps-106-96.png">
						<div >
							<div class="whySellOnDarazPointTitleStyle" >Timely Payments</div>
							<div class="whySellOnDarazPointValueContent" >
								<span class="whySellOnDarazPointValueStyle">Funds are safely deposited directly to your bank account on a </span>
								<span class="whySellOnDarazPointValueStyle fontBoldStyle">weekly basis</span>
							</div>
						</div>
					</div>
					<div class="whySellOnDarazPointContent flexTopCenter" >
						<img class="whySellOnDarazPointIconStyle" src="https://gw.alicdn.com/imgextra/i1/O1CN01bPXfxS1P6K7iHfDVy_!!6000000001791-2-tps-97-87.png">
						<div >
							<div class="whySellOnDarazPointTitleStyle" >Marketing Tools</div>
							<div class="whySellOnDarazPointValueContent" >
								<span class="whySellOnDarazPointValueStyle">Find new customers &amp; grow more with </span>
								<span class="whySellOnDarazPointValueStyle fontBoldStyle">advertising</span>
								<span class="whySellOnDarazPointValueStyle"> and our whole range of </span>
								<span class="whySellOnDarazPointValueStyle fontBoldStyle">marketing tools</span>
							</div>
						</div>
					</div>
					<div class="whySellOnDarazPointContent flexTopCenter" >
						<img class="whySellOnDarazPointIconStyle" src="https://gw.alicdn.com/imgextra/i1/O1CN01xFHAmn1JNpZJ4ntpq_!!6000000001017-2-tps-82-74.png">
						<div >
							<div class="whySellOnDarazPointTitleStyle" >Support&amp;Training</div>
							<div class="whySellOnDarazPointValueContent" >
								<p>Learn all about ecommerce for free and get help with <strong>seller support</strong> and <strong>Multikart University</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="bigBannerContent flexTopBetween" >
					<div class="leftBannerContent" >
						<div class="leftBannerArea" >
							<img class="leftBannerStyle" src="https://gw.alicdn.com/imgextra/i4/O1CN01cIlO9s1bI1dAQikpH_!!6000000003441-2-tps-956-1274.png">
						</div>
						<div class="leftBannerValueContent" >
							<div class="leftBannerTitleStyle" >We cannot imagine doing business without Multikart now</div>
							<div class="leftBannerSubTitleStyle" >Ali Khemani</div>
							<div class="leftBannerThreeSubTitleStyle" >Founder, Craftsman</div>
						</div>
						<div class="startContent" >
							<img class="singleStartStyle" src="https://gw.alicdn.com/imgextra/i2/O1CN01jCCsJ226P7rPBAiF5_!!6000000007653-2-tps-30-29.png">
							<img class="singleStartStyle" src="https://gw.alicdn.com/imgextra/i2/O1CN01jCCsJ226P7rPBAiF5_!!6000000007653-2-tps-30-29.png">
							<img class="singleStartStyle" src="https://gw.alicdn.com/imgextra/i2/O1CN01jCCsJ226P7rPBAiF5_!!6000000007653-2-tps-30-29.png">
							<img class="singleStartStyle" src="https://gw.alicdn.com/imgextra/i2/O1CN01jCCsJ226P7rPBAiF5_!!6000000007653-2-tps-30-29.png">
							<img class="singleStartStyle" src="https://gw.alicdn.com/imgextra/i2/O1CN01jCCsJ226P7rPBAiF5_!!6000000007653-2-tps-30-29.png">
						</div>
					</div>
					<div >
						<div class="bannerVideoContent" >
							<div class="bannerVideoClickImageStyle" >
								<img class="bannerVideoClickImageStyle" src="https://gw.alicdn.com/imgextra/i2/O1CN01B2gTI11oOyeJlgYGd_!!6000000005216-2-tps-1044-475.png">
							</div>
							<div class="bannerVideoClickTagStyle flexCenterCenter" >TESTIMONY</div>
							<div class="bannerVideoClickTagTitleStyle" >Zaid Asghar</div>
							<div class="bannerVideoClickTagvalueStyle" >At just 16 years old, Zaid runs his own shop on Multikart where he deals in mobile accessories and other similar products. He is an inspiration to all budding entrepreneurs in the country.</div>
						</div>
						<div class="bannerVideoContent" >
							<div class="bannerVideoClickImageStyle" >
								<img class="bannerVideoClickImageStyle" src="https://gw.alicdn.com/imgextra/i4/O1CN015ws8id22FjGqwjfmC_!!6000000007091-2-tps-1038-462.png">
							</div>
							<div class="bannerVideoClickTagStyle flexCenterCenter" >TESTIMONY</div>
							<div class="bannerVideoClickTagTitleStyle" >Abdullah Bawa</div>
							<div class="bannerVideoClickTagvalueStyle" >Back in 2015, Abdullah used to run a brick-and- mortar business of computing goods. After joining Multikart, he saw a boom in his online sales.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="simpleStepsContent flexTopCenter" >
			<div class="baseWidthStyle" >
				<div class="singleSimpleStepsTitleStyle" >5 Simple Steps to Start Selling</div>
				<div class="flexTopAround" >
					<div class="singleSimpleStepsContent" >
						<img class="singleSimpleImageStyle" src="https://gw.alicdn.com/imgextra/i4/O1CN014qQMSi1UNKubaCYdd_!!6000000002505-2-tps-244-148.png">
						<div class="singleSimpleTextStyle" >Signup for Free</div>
						<div class="singleSimpleValueStyle" >Create your account through our website or mobile app with just your phone number</div>
					</div>
					<div class="singleSimpleStepsContent" >
						<img class="singleSimpleImageStyle" src="https://gw.alicdn.com/imgextra/i3/O1CN01bkcPBG1VOXZSWUI5y_!!6000000002643-2-tps-110-102.png">
						<div class="singleSimpleTextStyle" >Add Profile Information</div>
						<div class="singleSimpleValueStyle" >Complete your profile by providing your email and store name so that we can identify you</div>
					</div>
					<div class="singleSimpleStepsContent" >
						<img class="singleSimpleImageStyle" src="https://gw.alicdn.com/imgextra/i4/O1CN010q6tC71SaxSfXIU1W_!!6000000002264-2-tps-106-96.png">
						<div class="singleSimpleTextStyle" >Add Address Information</div>
						<div class="singleSimpleValueStyle" >Provide all address details of your business</div>
					</div>
					<div class="singleSimpleStepsContent" >
						<img class="singleSimpleImageStyle" src="https://gw.alicdn.com/imgextra/i3/O1CN01u0NSjf1Sfzothh7k2_!!6000000002275-2-tps-106-96.png">
						<div class="singleSimpleTextStyle" >Add ID &amp; Bank Information</div>
						<div class="singleSimpleValueStyle" >Add in your ID &amp; Business related details. Include necessary bank information for payments</div>
					</div>
					<div class="singleSimpleStepsContent" >
						<img class="singleSimpleImageStyle" src="https://gw.alicdn.com/imgextra/i1/O1CN01emouuS1qaXssszGVS_!!6000000005512-2-tps-119-118.png">
						<div class="singleSimpleTextStyle" >List Products</div>
						<div class="singleSimpleValueStyle" >Add products to your store through seller center. Start selling as soon as your products go live after going through quality control</div>
					</div>
				</div>
			</div>
		</div>
		<div class="learnDarazVideoContent flexTopCenter" >
			<div class="baseWidthStyle flexTopCenter" >
				<div class="learnDarazVideoArea" style="background: url(&quot;https://gw.alicdn.com/imgextra/i3/O1CN01rdfbxB27EQDmu6hP0_!!6000000007765-2-tps-2320-948.png&quot;) 0% 0% / cover;" >
					<video class="learnDarazVideoStyle" src=" https://drive.google.com/file/d/1QZ4D9-_rNJ1zIhVlgI22ebq1RWPYluj7/view?usp=share_link" controls="">Your browser does not support the video TAB.</video>
				</div>
			</div>
		</div>
		<div class="flexTopCenter" >
			<div class="baseWidthStyle flexTopCenter" >
				<div class="goMobileContent" style="background: url(&quot;https://gw.alicdn.com/imgextra/i2/O1CN01sWyDkT1FDyaHONfDe_!!6000000000454-2-tps-1837-693.png&quot;) 0% 0% / cover;" >
					<div class="goMobileSubTitleStyle" >GO MOBILE</div>
					<div class="goMobileTitleStyle" >Use the free Daraz Seller App</div>
					<div class="goMobileValueStyle" >The Daraz Seller app is packed with features to help you manage and grow your ecommerce business wherever you are. It gives you the freedom to take care of business details right from your phone.</div>
					<div class="goMobileIconContent flexCenterLeft" >
						<div class="cursorpointerStyle" >
							<img class="goMobileIconStyle" src="https://gw.alicdn.com/imgextra/i4/O1CN01r67sPJ1eHW2b7hiEy_!!6000000003846-2-tps-209-73.png">
						</div>
						<div class="cursorpointerStyle" >
							<img class="goMobileIconStyle" src="https://gw.alicdn.com/imgextra/i3/O1CN010QuQka1cPBRDUxjqf_!!6000000003592-2-tps-236-74.png">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="FAQContent flexTopCenter" >
			<div class="FAQArea" >
				<div class="FAQTitleStyle flexTopCenter" >Frequently Asked Questions</div>
				<div class="next-collapse FAQPanelContent" role="presentation" >
					<div class="next-collapse-panel next-collapse-panel-expanded" >
						<div class="next-collapse-panel-title" tabindex="0" aria-expanded="true" role="button" >
							<i aria-hidden="true" class="next-icon next-icon-arrow-right next-medium next-collapse-panel-icon next-collapse-panel-icon-expanded"></i>What categories can I sell on Multikart?
						</div>
						<div class="next-collapse-panel-content" role="region" >
							<div >
								<p>Daraz has over 30 main categories of goods that you can sell your products in, including fashion, electronics, FMCG, lifestyle, health &amp; beauty to name a few. However, we do have items that are counterfeit, dangerous and prohibited by law or cultural norms which sellers must refrain from listing. <a href="https://university.daraz.pk/course/learn?id=1084&amp;type=policies&amp;login=skip" target="_blank" rel="noopener"  previewlistener="true">Click here</a> to learn more </p>
							</div>
						</div>
					</div>
				</div>
				<div class="next-collapse FAQPanelContent" role="presentation" >
					<div class="next-collapse-panel next-collapse-panel-expanded" >
						<div class="next-collapse-panel-title" tabindex="0" aria-expanded="true" role="button" >
							<i aria-hidden="true" class="next-icon next-icon-arrow-right next-medium next-collapse-panel-icon next-collapse-panel-icon-expanded"></i>What is Multikart Commission?
						</div>
						<div class="next-collapse-panel-content" role="region" >
							<div >Opening a shop on Daraz is completely free. However, Multikart does deduct a small percentage of commission from the payment of your orders. Each product commission depends on the type of category it falls under.</div>
						</div>
					</div>
				</div>
				<div class="next-collapse FAQPanelContent" role="presentation" >
					<div class="next-collapse-panel next-collapse-panel-expanded" >
						<div class="next-collapse-panel-title" tabindex="0" aria-expanded="true" role="button" >
							<i aria-hidden="true" class="next-icon next-icon-arrow-right next-medium next-collapse-panel-icon next-collapse-panel-icon-expanded"></i>What documents do I need to provide during signup?
						</div>
						<div class="next-collapse-panel-content" role="region" >
							<div >
								<p>Before you signup, make sure you are ready with the following documents: <br>i) ID information (National ID Card for individual sellers OR Business Registration Document for corporate sellers) <br>ii) A bank cheque copy with the same title as your ID/corporate information. Multikart will be sending payments from your sales to this bank account. <br>
									<a href="https://university.daraz.pk/course/learn?id=12676&amp;type=tutorials&amp;login=skip" target="_blank" rel="noopener"  previewlistener="true">Click here</a> to learn more about other document types that we accept.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="next-collapse FAQPanelContent" role="presentation" >
					<div class="next-collapse-panel next-collapse-panel-expanded" >
						<div class="next-collapse-panel-title" tabindex="0" aria-expanded="true" role="button" >
							<i aria-hidden="true" class="next-icon next-icon-arrow-right next-medium next-collapse-panel-icon next-collapse-panel-icon-expanded"></i>What if incorrect information is submitted during signup?
						</div>
						<div class="next-collapse-panel-content" role="region" >
							<div >
								<p>In case there are any issues in your seller signup form, our verification team will guide you by highlighting the incorrect information after which you can simply resubmit. <a href="https://university.daraz.pk/course/learn?id=5960&amp;type=tutorials&amp;login=skip" target="_blank" rel="noopener"  previewlistener="true">Click here</a> to learn more about seller signup rejection reasons. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="getStartContent flexTopCenter" >
			<div class="getStartArea flexCenterBetween" >
				<div class="getStartTitleStyle" >What are you waiting for? Start selling with Multikart today.</div>
				<div class="getStartButtonStyle flexCenterCenter" >GET STARTED</div>
			</div>
		</div>
	</div>
</div> 
@endsection 