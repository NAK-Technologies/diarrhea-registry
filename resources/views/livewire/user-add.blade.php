<div>
    <button type="button" class="btn btn-primary rounded-circle fixed-bottom m-5" style="height: 50px; width: 50px;" data-bs-toggle="modal" data-bs-target="#userAdd">+</button>

<div class="modal fade" id="userAdd" tabindex="-1" aria-labelledby="userAddLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userAddLabel">Create New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-1">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" wire:model.defer="name" id="name">
        </div>
        <div class="mb-1">
            <label for="email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="email" wire:model.defer="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
          </div>
        <div class="mb-3">
            <label for="role" class="col-form-label">Role:</label>
            <select id="role" class="form-control" wire:model.defer="role">
                <option value=""></option>
                <option value="user">User</option>
                <option value="viewer">Viewer</option>
                <option value="admin">Admin</option>
            </select>
          </div>
          <div class="mb-1">
              <label for="cities">City</label>
            <input type="text" list="cities" class="form-control" wire:model.defer="city">
            <datalist id="cities">
                @foreach($cities as $city)
                <option value="{{ $city->id }}-{{ $city->name }}">({{ $city->state }})</option>
                @endforeach
            </datalist>
          </div>
          <div class="mb-1">
            <label for="location">Location:</label>
            <input type="text" id="location" class="form-control" wire:model.defer="location" list="locations">
            <datalist id="locations">
                @foreach($locations as $location)
                <option value="{{ $location }}"></option>
                @endforeach
            </datalist>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click="store" data-bs-dismiss="modal">Create</button>
      </div>
    </div>
  </div>
</div>
</div>
