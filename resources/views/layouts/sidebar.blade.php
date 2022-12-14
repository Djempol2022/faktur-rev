<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<x-sidebar-item :href="route('dashboard')" :active="request()->routeIs('dashboard*')" icon="mdi-view-dashboard">
			{{ __('Dashboard') }}
		</x-sidebar-item>
		<x-sidebar-item :href="route('data-faktur')" :active="request()->routeIs('data-faktur*')" icon="mdi-database">
			{{ __('Data Faktur') }}
		</x-sidebar-item>
		<x-sidebar-item :href="route('pengaturan')" :active="request()->routeIs('pengaturan*')" icon="mdi-settings">
			{{ __('Pengaturan') }}
		</x-sidebar-item>
		<x-sidebar-item :href="route('logout')" :active="request()->routeIs('logout*')" icon="mdi-logout">
			{{ __('Logout') }}
		</x-sidebar-item>
	</ul>
</nav>
