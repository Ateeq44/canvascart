@extends('layouts.front')

@section('content')
<div class="breadcrumb-section" bis_skin_checked="1">
    <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="col-sm-6" bis_skin_checked="1">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}" previewlistener="true">Home</a></li>
                        <li class="breadcrumb-item active">login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="login-page section-b-space">
    <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="col-lg-6 offset-md-3" bis_skin_checked="1">
                <h3>Login</h3>
                <div class="theme-card" bis_skin_checked="1">
                    <form  method="POST" action="{{ route('login') }}">
							@csrf
                        <div class="form-group" bis_skin_checked="1">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
                        </div>

                        <div class="form-group" bis_skin_checked="1">
                            <label for="review">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
                        </div>
                        <button type="submit" class="btn btn-solid">
							{{ __('Login') }}
						</button>
						@if (Route::has('password.request'))
						<a class="btn" style="color: #222;" href="{{ route('password.request') }}">
							{{ __('Forgot Your Password?') }}
						</a>
						@endif
                    </form>
                    <p class="mt-5" style="font-size:15px;">If You Do Not Register <a style="color:#f39910;" href="{{url('register')}}">Click Here</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection