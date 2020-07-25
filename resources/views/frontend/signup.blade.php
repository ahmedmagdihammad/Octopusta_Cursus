<!-- Start Head -->
<title>Cursus - Signin</title>
@include('layouts.frontend.head')
<!-- End Head -->

<!-- Signup Start -->
<div class="sign_in_up_bg">
		<div class="container">
			<div class="row justify-content-lg-center justify-content-md-center">
				<div class="col-lg-12">
					<div class="main_logo25" id="logo">
						<a href="index.html"><img src="images/logo.svg" alt=""></a>
						<a href="index.html"><img class="logo-inverse" src="images/ct_logo.svg" alt=""></a>
					</div>
				</div>
			
				<div class="col-lg-6 col-md-8">
					<div class="sign_form">
						<h2>Welcome to Edututs+</h2>
						<p>Sign Up and Start Learning!</p>
						<form method="POST" action="{{ route('signup') }}">
                            @csrf
							<div class="ui search focus">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}" id="name" maxlength="64" placeholder="Name" required autofocus>															
                                </div>
                                @if ($errors->has('name'))
                                    <span class="alert-danger" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore{{ $errors->has('mobile') ? ' is-invalid' : '' }}" type="text" name="mobile" value="{{ old('mobile') }}" id="mobile" maxlength="64" placeholder="Mobile" required autofocus>															
                                </div>
                                @if ($errors->has('mobile'))
                                    <span class="alert-danger" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" id="email" required autofocus maxlength="64" placeholder="Email Address">															
                                </div>
                                @if ($errors->has('email'))
                                    <span class="alert-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Password">															
                                </div>
                                @if ($errors->has('password'))
                                    <span class="alert-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="password" name="password_confirmation" value="" id="password-confirm" required="" maxlength="64" placeholder="Password Confirm">															
                                </div>
                            </div>
                            <div class="ui search focus mt-15 ">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore " type="hidden" name="type" value="S" id="id_type" required="" maxlength="64" placeholder="Password">															
                                </div>
                            </div>
							<div class="ui form mt-30 checkbox_sign ">
								<div class="inline field">
									<div class="ui checkbox mncheck">
										<input type="checkbox" tabindex="0" class="hidden">
										<label>I’m in for emails with exciting discounts and personalized recommendations</label>
									</div>
								</div>
							</div>
							<button class="login-btn" type="submit">Next</button>
						</form>
						<p class="sgntrm145">By signing up, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
						<p class="mb-0 mt-30">Already have an account? <a href="{{url('/')}}">Log In</a></p>
					</div>
					<!-- <div class="sign_footer"><img src="{{asset('frontend/images/sign_logo.png')}}" alt="">© 2020 <strong>Cursus</strong>. All Rights Reserved.</div> -->
				</div>				
			</div>				
		</div>				
	</div>
	<!-- Signup End -->	

<!-- Start Foot -->
@include('layouts.frontend.foot')
<!-- End Foot -->