@props(['icon', 'title', 'value', 'color'])

@push('styles')
	<style>
		.icon-container {
			position: relative;
			border-radius: 9999px;
			width: 2rem;
			height: 2rem;
		}

		.icon-symbol {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%)
		}
	</style>
@endpush

<div class="col-md-3 mb-4 stretch-card transparent">
	<div class="card card-{{ $color }}">
		<div class="card-body">
			@isset($icon)
				<div class="bg-light text-primary icon-container @isset($title) mb-2 @endisset">
					<i class="mdi mdi-{{ $icon }} icon-symbol"></i>
				</div>
			@endisset
			@isset($title)
				<p class="@isset($value) mb-3 @endisset">{{ $title }}</p>
			@endisset
			@isset($value)
				<p class="fs-30 mb-2">{{ $value }}</p>
			@endisset
		</div>
	</div>
</div>
