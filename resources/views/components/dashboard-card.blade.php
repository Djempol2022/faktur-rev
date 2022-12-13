@props(['title', 'value', 'color'])

<div class="col-md-4 mb-4 stretch-card transparent">
	<div class="card card-{{ $color }}">
		<div class="card-body">
			<p class="mb-4">{{ $title }}</p>
			<p class="fs-30 mb-2">{{ $value }}</p>
		</div>
	</div>
</div>
