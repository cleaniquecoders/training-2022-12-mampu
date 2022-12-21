<div>
    <div class="col-span-6 sm:col-span-4">
        <x-jet-input id="keyword" type="text" class="mt-1 block w-full"
            wire:model="keyword"
            wire:keydown.enter="search" />
        <x-jet-input-error for="keyword" class="mt-2" />
    </div>

    <ol class="py-4">
        @forelse($users as $user)
            <li>{{ $user->name }}</li>
        @empty
            <li>No users found.</li>
        @endforelse
    </ol>

</div>
