@props(['active', 'icon'])


<li class="nav-item {{ $active ? 'active' : '' }}">
	<a {{ $attributes }} class="nav-link">
		<i class="mdi {{ $icon }} menu-icon"></i>
		<span class="menu-title">
			{{ $slot }}
		</span>
	</a>
</li>
