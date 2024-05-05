<x-three-dots-dropdown>
	<a class="dropdown-item rounded-top" href="{{ route('users.edit', $id) }}"><span class="bi bi-pencil-fill text-success me-2"></span>Edit</a>
	<button class="delete-user dropdown-item rounded-bottom" data-id="{{ $id }}"><span class="bi bi-trash-fill text-danger me-2"></span>Remove</button>
</x-three-dots-dropdown>
