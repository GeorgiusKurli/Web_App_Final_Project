<header>
	<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
		<!-- logo -->
		<a class="navbar-brand mb-1" href="{{ url('/') }}">
			<!-- logo ratio approx: 4.5:1 -->
			<img src="{{asset('EO2.png') }}" style="width: 120px; height: 27px;">
		</a>

		<!-- navbar toggler for hamburger menu -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_collapseItems">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- items to be collapsed -->
		<div class="collapse navbar-collapse" id="navbar_collapseItems">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item" id="nav_home"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
				<li class="nav-item" id="nav_test"><a class="nav-link" href="{{ url('/test') }}">Tests</a></li>
				@guest
				@else
					<li class="nav-item" id="nav_create"><a class="nav-link" href="{{ url('/create') }}">Create</a></li>
				@endguest
			</ul>

			<!--user dropdown list -->
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					@guest
						<a class="nav-link dropdown-toggle" id="navbar_user" data-toggle="dropdown">Guest
						</a>
						<div class="dropdown-menu">
							<!-- Login/Register Buttons -->
							<form class="form-inline">
								<a class="btn btn-outline-success btn-sm mx-auto" href="{{ route('login') }}">{{ __('Login') }}</a>
								
								@if (Route::has('register'))
								<a class="btn btn-outline-success btn-sm mx-auto" href="{{ route('register') }}">{{ __('Register') }}</a>
								@endif
							</form>
						</div>
					@else
					
						<a class="nav-link dropdown-toggle" id="navbar_user" data-toggle="dropdown">{{ Auth::user()->name }}
						</a>
						<div class="dropdown-menu">
							<form class="form-inline">
								<!-- <a class="btn btn-outline-success btn-sm mx-auto">Profile</a> -->
								<!-- log out button -->
								<a class="btn btn-outline-success btn-sm mx-auto" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
								</a>
							</form>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					@endguest
				</li>

				<li class="nav-item">
					<form class="form-inline" action="{{url('/test')}}" >
						<input class="form-control mr-1" name="search" placeholder="Search">
						<button class="btn btn-outline-primary" type="submit">Search</button>
					</form>
				</li>
			</ul>
		</div>
	</nav>
	<div id = "alert_placeholder"></div>
</header>