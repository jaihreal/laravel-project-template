<x-app-layout>
	<x-heading>
		<x-slot:title>
			Users
		</x-slot:title>

		<div class="btn-toolbar mb-2 mb-md-0">
			<a href="{{ route('users.create') }}" class="btn btn-sm btn-outline-primary d-inline-flex align-items-center animate-up-2">
				<i class="icon icon-xs bi bi-plus-lg"></i>
				Add User
			</a>
		</div>
	</x-heading>
  <div class="table-settings mx-4 mb-4 ">
		<div class="row align-items-center justify-content-between">
			<div class="col-9 col-lg-8 d-md-flex">
				<x-table-search-field id="user-search-field" placeholder="User"></x-table-search-field>
				<select class="me-2 me-lg-3 form-select fmxw-200 d-none d-md-inline" id="user-role-filter">
					<option value="">All</option>
					@foreach (config('constants.user.roles') as $role)
						<option value="{{ $role }}">{{ $role }}</option>
					@endforeach
				</select>
			</div>
			<div class="col-3 col-lg-4 d-flex justify-content-end">
				<x-table-page-length id="user-page-length"></x-table-page-length>
			</div>
		</div>
	</div>
	<div class="card mx-4 mb-5">
		<div class="card-body">
			<x-table id="user-table">
				<thead class="thead-light">
					<tr>
						<th class="rounded-start">First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Role</th>
						<th>Date Added</th>
						<th class="rounded-end" width="10%">Action</th>
					</tr>
				</thead>
				<tbody></tbody>
			</x-table>
		</div>
	</div>

	{{-- modal --}}
	<x-modal id="delete-user-modal" confirm-button-id="destroy-user" type="delete" >
		<x-slot:message>
			<p>Delete status?</p>
		</x-slot:message>
	</x-modal>
	
	@push('scripts')
    <script type="text/javascript" src="{{ asset('js/page/user/index.js') }}"></script>
	@endpush
</x-app-layout>