<header class="header clearfix">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="back_link">
					<a href="{{route('home')}}" class="hde151">Back To Cursus</a>
					<a href="{{route('home')}}" class="hde152">Back</a>
				</div>
				<div class="ml_item">
					<div class="main_logo main_logo15" id="logo">
						<a href="{{route('home')}}"><img src="{{asset('frontend/images/logo.svg')}}" alt=""></a>
						<a href="{{route('home')}}"><img class="logo-inverse" src="{{asset('frontend/images/ct_logo.svg')}}" alt=""></a>
					</div>				
				</div>				
				<div class="header_right pr-0">
					<ul>				
						<li class="ui top right pointing dropdown">
							<a href="#" class="opts_account">
								<img src="{{asset('frontend/images/hd_dp.jpg')}}" alt="">
							</a>
							<div class="menu dropdown_account">
								<div class="channel_my">
									<div class="profile_link">
										<img src="{{asset('frontend/images/hd_dp.jpg')}}" alt="">
										<div class="pd_content">
											<div class="rhte85">
												<h6>{{Auth::user()->name}}</h6>
												<div class="mef78" title="Verify">
													<i class='uil uil-check-circle'></i>
												</div>
											</div>
											<span>{{Auth::user()->email}}</span>
										</div>							
									</div>
									<a href="my_instructor_profile_view.html" class="dp_link_12">View Instructor Profile</a>
								</div>
								<div class="night_mode_switch__btn">
									<a href="#" id="night-mode" class="btn-night-mode">
										<i class="uil uil-moon"></i> Night mode
										<span class="btn-night-mode-switch">
											<span class="uk-switch-button"></span>
										</span>
									</a>
								</div>
								<a href="instructor_dashboard.html" class="item channel_item">Cursus Dashboard</a>						
								<a href="sign_in.html" class="item channel_item" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Sign Out</a>
								<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</div>
						</li>
					</ul>
				</div>		
			</div>		
		</div>
	</div>
</header>