<div class="card card-body border-0 shadow mb-4">
	<h2 class="h5 mb-4">Profile Information</h2>

	<form method="POST" action="{{ route('profile.update') }}">

		@csrf
		@method('patch')

		<div class="row">
			<div class="col-md-6">
				<div class="form-group mb-3">
					<label for="first_name">First Name
						<x-asterisks />
					</label>
					<input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" value="{{ old('first_name', $user->first_name) }}" required>
					@error('first_name')
						<x-input-error message="{{ $message }}" />
					@enderror
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group mb-3">
					<label for="middle_name">Middle Name</label>
					<input type="text" id="middle_name" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" placeholder="Middle Name" value="{{ old('middle_name', $user->middle_name) }}" >
					@error('middle_name')
						<x-input-error message="{{ $message }}" />
					@enderror
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group mb-3">
					<label for="last_name">Last Name
						<x-asterisks />
					</label>
					<input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" value="{{ old('last_name', $user->last_name) }}" required>
					@error('last_name')
						<x-input-error message="{{ $message }}" />
					@enderror
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group mb-3">
					<label for="email">Email
						<x-asterisks />
					</label>
					<input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email', $user->email) }}" required>
					@error('email')
						<x-input-error message="{{ $message }}" />
					@enderror
				</div>
			</div>
		</div>

		<div class="mt-3">
			<button class="btn btn-outline-primary mt-2 animate-up-2" type="submit"><i class="me-2 bi bi-save"></i> Update</button>
		</div>

	</form>

</div>