<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
	<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
		<a class="navbar-brand brand-logo mr-4" href="index.html">
			<img src="{{ asset('images/Logofakturbesar.png') }}" class="ml-3" alt="logo" />
		</a>
		<a class="navbar-brand brand-logo-mini" href="index.html">
			<img class="img-responsive ml-3" src="{{ asset('images/logokecil.png') }}" alt="logo" />
		</a>
	</div>
	<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
		<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
			<span class="icon-menu"></span>
		</button>

		<ul class="navbar-nav navbar-nav-right">

			<li class="nav-item nav-profile dropdown">
				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
					<h5 class="d-inline mr-2">{{ auth()->user()->name }}</h5>
					<img src="{{ url('storage/'.Auth::user()->foto) }}" alt="profile" />
				</a>
				<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
					<a class="dropdown-item" href="{{ route('Pengaturan') }}">
						<i class="ti-settings text-primary"></i>
						Pengaturan
					</a>
					<a class="dropdown-item">
						<i class="ti-power-off text-primary"></i>
						Logout
					</a>
				</div>
			</li>
		</ul>
		<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
			data-toggle="offcanvas">
			<span class="icon-menu"></span>
		</button>
	</div>
</nav>
