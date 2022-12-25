<nav class="sidebar sidebar-offcanvas" id="sidebar">
	{{-- @dealer --}}
	@if (Auth::user()->role == "dealer")
		<ul class="nav">
			<x-sidebar-item :href="route('dealer.Dashboard')" :active="request()->routeIs('dealer.Dashboard*')" icon="mdi-view-dashboard">
				{{ __('Dashboard') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('dealer.DataFakturDealer')" :active="request()->routeIs('dealer.DataFakturDealer*')" icon="mdi-database">
				{{ __('Data Faktur') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('Pengaturan')" :active="request()->routeIs('Pengaturan*')" icon="mdi-settings">
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
			<x-sidebar-item :href="route('biro.Dashboard')" :active="request()->routeIs('biro.Dashboard*')" icon="mdi-view-dashboard">
				{{ __('Dashboard') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('biro.DataFaktur')" :active="request()->routeIs('biro.DataFaktur*')" icon="mdi-database">
				{{ __('Data Faktur') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('biro.DataPengguna')" :active="request()->routeIs('biro.DataPengguna*')" icon="mdi-account">
				{{ __('Data Pengguna') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('Pengaturan')" :active="request()->routeIs('Pengaturan*')" icon="mdi-settings">
				{{ __('Pengaturan') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('logout')" :active="request()->routeIs('logout*')" icon="mdi-logout">
				{{ __('Logout') }}
			</x-sidebar-item>
		</ul>
	{{-- @endbiro --}}
	@endif
</nav>
