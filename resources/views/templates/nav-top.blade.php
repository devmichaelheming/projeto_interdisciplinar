<nav class="top-bar navbar-fixed-top" role="navigation">
			<div class="logo-area">
				<a href="#" id="btn-nav-sidebar-minified" class="btn btn-link btn-nav-sidebar-minified pull-left">
					<button type="submit">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</a>
				<a class="btn btn-link btn-off-canvas pull-left"><i class="icon ion-navicon"></i></a>
				<div class="logo pull-left">
				
				</div>
			</div>
			<div class="top-bar-right pull-right">
				
				<div class="logged-user">
					<div class="btn-group">
						<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
							<img src="{{ asset('templates/theme/assets/img/user-loggedin.png')}}" alt="Sebastian" />
							<span class="name">{{ Auth::user()->name }}
								<i class="icon ion-ios-arrow-down"></i>
							</span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="#">
									<i class="icon ion-ios-person"></i>
									<span class="text">Profile</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon ion-ios-gear"></i>
									<span class="text">Settings</span>
								</a>
							</li>
							<li>
								<a href="{{ route('sair') }}" 
								onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="icon ion-power"></i>
									<span class="text">Logout</span>
								</a>

								<form id="logout-form" action="{{ route('sair') }}" method="POST" style="display: none;">
									@csrf
								</form>

							</li>
						</ul>
					</div>
				</div>
				{{-- <div class="action-group visible-lg-inline-block">
					<ul>
						<li class="action-item chat">
							<a href="#" id="toggle-right-sidebar" class="toggle-right-sidebar"><i class="icon ion-ios-chatboxes-outline"></i><span class="count">5</span></a>
						</li>
					</ul>
				</div> --}}
			</div>
		</nav>
	<script src="{{ asset('js/jquery.js') }}"></script>
<script>

	 $(document).ready(function(){

		$('.logo-area button').click(function (){
			$(this).toggleClass("active")
		});

	});

</script>