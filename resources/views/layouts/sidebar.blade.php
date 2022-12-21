<nav class="sidebar sidebar-offcanvas" id="sidebar">
	{{-- @dealer --}}
	@if (Auth::user()->role == "dealer")
		<ul class="nav">
			<x-sidebar-item :href="route('dealer.dashboard')" :active="request()->routeIs('dealer.dashboard*')" icon="mdi-view-dashboard">
				{{ __('Dashboard') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('dealer.data-faktur')" :active="request()->routeIs('dealer.data-faktur*')" icon="mdi-database">
				{{ __('Data Faktur') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('dealer.pengaturan.index')" :active="request()->routeIs('dealer.pengaturan*')" icon="mdi-settings">
				{{ __('Pengaturan') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('logout')" :active="request()->routeIs('logout*')" icon="mdi-logout">
				{{ __('Logout') }}
			</x-sidebar-item>
		</ul>
	{{-- @enddealer --}}
	
	{{-- @biro --}}
	@elseif (Auth::user()->role == "biro")
		<ul class="nav">
			<x-sidebar-item :href="route('biro.BiroDashboard')" :active="request()->routeIs('biro.BiroDashboard*')" icon="mdi-view-dashboard">
				{{ __('Dashboard') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('biro.DataFaktur')" :active="request()->routeIs('biro.DataFaktur*')" icon="mdi-database">
				{{ __('Data Faktur') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('biro.DataPengguna')" :active="request()->routeIs('biro.DataPengguna*')" icon="mdi-account">
				{{ __('Data Pengguna') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('biro.Pengaturan')" :active="request()->routeIs('biro.Pengaturan*')" icon="mdi-settings">
				{{ __('Pengaturan') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('logout')" :active="request()->routeIs('logout*')" icon="mdi-logout">
				{{ __('Logout') }}
			</x-sidebar-item>
		</ul>
	{{-- @endbiro --}}
	@endif
</nav>
