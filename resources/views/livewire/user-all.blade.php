<div class="bg-white p-4">
    <div class="d-flex align-items-center mb-4">
        <div class="input-group">
            <label for="all" class="m-2">All Users</label>
            <input type="checkbox" id="all" wire:click="toggleAll()">
        </div>
        <div class="input-group d-flex align-items-center gap-2">
            <label for="search">Search</label>
            <input type="search" class="form-control bg-white" placeholder="Name / City / Location" wire:model.debounce.300ms="search">
        </div>
    </div>
    <ul class="list-group">
        @forelse($users as $user)
        <li class="list-group-item d-flex p-2 justify-content-between">
            <span>
                {{ $user->name }}
            </span>
            <span class="text-muted">
                <span>
                    {{ $user->city ?? 'City' }} -
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
