<x-app-layout>
	<x-heading>
		<x-slot:title>
			Update Profile
		</x-slot:title>
	</x-heading>

	<div class="row mb-4">
		<div class="col-12 col-xl-8">

			{{-- profile information --}}
			@include('profile.partials.update-profile')

			{{-- profile password --}}
			@include('profile.partials.update-password')

		</div>

	</div>

</x-app-layout>