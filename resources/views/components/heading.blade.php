<div {{ $attributes->merge(['class' => 'd-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4 mx-4']) }}>
	
	<div class="d-block mb-md-0">
		<h2 class="h4">{{ $title }}</h2>
	</div>

	{{ $slot }}

</div>