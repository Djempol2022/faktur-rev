<nav class="sidebar sidebar-offcanvas" id="sidebar">
	@dealer
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
	@enddealer
	@biro
		<ul class="nav">
			<x-sidebar-item :href="route('biro.dashboard')" :active="request()->routeIs('biro.dashboard*')" icon="mdi-view-dashboard">
				{{ __('Dashboard') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('biro.data-faktur')" :active="request()->routeIs('biro.data-faktur*')" icon="mdi-database">
				{{ __('Data Faktur') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('biro.pengaturan')" :active="request()->routeIs('biro.pengaturan*')" icon="mdi-settings">
				{{ __('Pengaturan') }}
			</x-sidebar-item>
			<x-sidebar-item :href="route('logout')" :active="request()->routeIs('logout*')" icon="mdi-logout">
				{{ __('Logout') }}
			</x-sidebar-item>
		</ul>
	@endbiro
</nav>
