@props(['id', 'type', 'confirmButtonId'])

<div>
  {{-- modal --}}
  <div class="modal fade" data-backdrop="static" data-keyboard="false" id="{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">

        @if ($type === 'delete')
          <div class="modal-header">
            <h5 class="modal-title">Delete Confirmation</h5>
            <span class="pull-right spinner">
							<i class="fa-solid fa-spinner fa-spin fa-xl"></i>
            </span>
          </div>
          <div class="modal-body">
						{{ $message }}
          </div>
          <div class="modal-footer">
						<button id="close-button" data-bs-dismiss="modal" class="btn btn-outline-secondary"><i class="bi bi-x-lg"></i> Close </button>
						<button id="{{ $confirmButtonId }}" class="btn btn-outline-danger"><i class="bi bi-check-lg"></i> Delete </button>
          </div>
        @endif

      </div>
    </div>
  </div>

</div>