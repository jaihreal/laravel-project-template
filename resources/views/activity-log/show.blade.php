<x-app-layout>

	<x-heading>
		<x-slot:title>
			Activit Log Details
		</x-slot:title>
	</x-heading>

	<div class="row mb-4">
		<div class="col-12 col-xl-4">

			<div class="card card-body border-0 shadow mb-4">
				<h2 class="h5 mb-4">Activity Log Information</h2>

				<div class="d-flex align-items-center justify-content-between border-bottom py-3">
					<div>
						<div class="h6 mb-0 d-flex align-items-center">
							<i class="icon icon-xs text-gray-500 me-2 bi bi-bookmark-fill"></i>
							User
						</div>
						<div class="small card-stats">
							{{ $activity->causer->first_name }} {{ $activity->causer->last_name }}
						</div>
					</div>
				</div>
				<div class="d-flex align-items-center justify-content-between border-bottom py-3">
					<div>
						<div class="h6 mb-0 d-flex align-items-center">
							<i class="icon icon-xs text-gray-500 me-2 bi bi-bookmark-fill"></i>
							Log Name
						</div>
						<div class="small card-stats">
							{{ $activity->log_name }}
						</div>
					</div>
					<div>
						@php
							switch ($activity->event) {
								case 'created':
									$badgeColor = 'bg-success';
									break;
								case 'updated':
									$badgeColor = 'bg-info';
									break;
								case 'deleted':
									$badgeColor = 'bg-warning';
									break;
								case 'created':
								default:
									$badgeColor = 'bg-primary';
									break;
							}
						@endphp
						<label class="d-flex align-items-center fw-bold badge badge-md {{ $badgeColor }} text-white text-uppercase">
							{{ $activity->event }}
						</label>
					</div>
				</div>
				<div class="d-flex align-items-center justify-content-between border-bottom py-3">
					<div>
						<div class="h6 mb-0 d-flex align-items-center">
							<i class="icon icon-xs text-gray-500 me-2 bi bi-bookmark-fill"></i>
							Description
						</div>
						<div class="small card-stats">
							{{ $activity->description }}
						</div>
					</div>
					<div>
						<label class="d-flex align-items-center fw-bold badge badge-md bg-success text-white text-uppercase">
							{{ $activity->created_at->format('Y-m-d H:i:s') }}
						</label>
					</div>
				</div>
				@if ( isset($activity->properties['attributes']) )
					<div class="d-flex align-items-center justify-content-between pt-3">
						<div>
							<div class="h6 mb-0 d-flex align-items-center">
								<i class="icon icon-xs text-gray-500 me-2 bi bi-bookmark-fill"></i>
								New Properties
							</div>
							<div class="small card-stats">
								@forelse ($activity->properties['attributes'] as $key => $value)
									<code>{{ $key }} : {{ $value }} <br></code>
								@empty
									<code>No properties</code>
								@endforelse
							</div>
						</div>
					</div>
				@endif
				@if ( isset($activity->properties['old']) )
					<div class="d-flex align-items-center justify-content-between pt-3">
						<div>
							<div class="h6 mb-0 d-flex align-items-center">
								<i class="icon icon-xs text-gray-500 me-2 bi bi-bookmark-fill"></i>
								Old Properties
							</div>
							<div class="small card-stats">
								@forelse ($activity->properties['old'] as $key => $value)
									<code>{{ $key }} : {{ $value }} <br></code>
								@empty
									<code>No properties</code>
								@endforelse
							</div>
						</div>
					</div>
				@endif
				<div class="mt-3">
					<a href="{{ route('activity-logs.index') }}" class="btn btn-blue-800 mt-2 animate-up-2"><i class="me-2 bi bi-back"></i> Back</a>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>