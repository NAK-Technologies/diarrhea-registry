<div class="bg-white p-4">
    <div class="d-flex align-items-center gap-2 mb-4">
        <div class="input-group">
            <label for="all" class="m-2">All Users</label>
            <input type="checkbox" id="all" wire:click="toggleAll()">
        </div>
        <div class="input-group d-flex align-items-center gap-2">
            <label for="search">Search</label>
            <input type="search" class="form-control bg-white" placeholder="Name / City / Location" wire:model.debounce.300ms="search">
        </div>
        <div class="input-group d-flex justify-content-end">
            <span>Total Records: {{ $users->count() }}</span>
        </div>
    </div>
    <ul class="list-group">
        @forelse($users as $user)
        <li class="list-group-item d-flex p-2 justify-content-between list-group-item-action" wire:dirty.class="active"  wire:click="edit({{ $user }})">
            <span>
                <i class="{{ $user->role == 'admin' ? 'bi-person-fill' : ($user->role == 'viewer' ? 'bi-eye-fill' : '') }} text-info"></i> {{ $user->name }}
            </span>
            <span class="text-muted">
                <span>
                    {{ $user->city()->first()->name ?? 'City'}} -
                </span>
                <span>
                    {{ $user->location ?? 'Location' }}
                </span>
            </span>
        </li>        
        @empty
        <li class="list-group-item text-center p-2 m-0 text-muted">
            No user/s has been created with this account yet.
        </li>
        @endforelse
    </ul>
</div>
