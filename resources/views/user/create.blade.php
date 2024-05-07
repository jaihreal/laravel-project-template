<x-app-layout>

	<x-heading>
		<x-slot:title>
			Add User
		</x-slot:title>
	</x-heading>

	<div class="row mb-4">
		<div class="col-12 col-xl-12">

			<div class="card card-body border-0 shadow mb-4">
				<h2 class="h5 mb-4">User information</h2>

				<form method="POST" action="{{ route('users.store') }}">
					@csrf

					<div class="row">
						<div class="col-md-4">
							<div class="form-group mb-3">
								<label for="first_name">First Name
									<x-asterisks />
								</label>
								<input type="text" id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" value="{{ old('first_name') }}" required>
								@error('first_name')
									<x-input-error message="{{ $message }}" />
								@enderror
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group mb-3">
								<label for="middle_name">Middle Name</label>
								<input type="text" id="middle_name" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" placeholder="Middle Name" value="{{ old('middle_name') }}" >
								@error('middle_name')
									<x-input-error message="{{ $message }}" />
								@enderror
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group mb-3">
								<label for="last_name">Last Name
									<x-asterisks />
								</label>
								<input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" value="{{ old('last_name') }}" required>
								@error('last_name')
									<x-input-error message="{{ $message }}" />
								@enderror
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group mb-3">
								<label for="email">Email
									<x-asterisks />
								</label>
								<input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
								@error('email')
									<x-input-error message="{{ $message }}" />
								@enderror
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group mb-3">
								<label for="role">User Role
									<x-asterisks />
								</label>
								<select name="role" id="role" class="form-select @error('role') is-invalid @enderror" required>
									@foreach (config('constants.user.roles') as $role)
										<option value="{{ $role }}" {{ old('role') == $role ? 'selected' : '' }}>{{ $role }}</option>
									@endforeach
								</select>
								@error('role')
									<x-input-error message="{{ $message }}" />
								@enderror
							</div>
						</div>
					</div>

					<hr>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group mb-3">
								<label for="password">Password
									<x-asterisks />
								</label>
								<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
								@error('password')
									<x-input-error message="{{ $message }}" />
								@enderror
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group mb-3">
								<label for="password_confirmation">Confirm Password
									<x-asterisks />
								</label>
								<input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" required>
							</div>
						</div>
					</div>

					<div class="mt-3">
						<button class="btn btn-outline-primary mt-2 animate-up-2" type="submit"><i class="bi bi-save"></i> Save</button>
						<a href="{{ route('users.index') }}" class="btn btn-outline-primary mt-2 animate-up-2"><i class="bi bi-back"></i> Back</a>
					</div>

				</form>
			</div>
		</div>
	</div>
</x-app-layout>