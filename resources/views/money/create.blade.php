<x-app-layout>
  @push('styles')
    
  @endpush

  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Money') }}
      </h2>
  </x-slot>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <div class="d-flex justify-content-between align-items-center">
              <div class="d-block mb-md-0">
                <h2 class="h4">Money</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form method="post" action="{{ route('moneys.store') }}">
            @csrf

            <div class="form-group" text-align-center>
              <div class="row">
                <div class="col-md-6">
                  <label for="owner">Owner</label>
                  <input type="text" class="form-control" name="owner" id="owner" required>
                </div>
              </div>
              {{-- <div class="row">
                <div class="col-md-6">
                  <label for="middle_name">Middle Name</label>
                  <input type="text" class="form-control" id="middle_name">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" id="last_name"required>
                </div>
              </div> --}}
              <div class="row">
                <div class="col-md-6">
                  <label for="amount">Amount</label>
                  <input type="number" class="form-control" name="amount" id="amount" required>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                  <button class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @push('scripts')
    
  @endpush
</x-app-layout>