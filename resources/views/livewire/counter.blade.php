<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <button wire:click="increase" class="bg-red-200 px-4 py-2 rounded-md">+</button>
    <h2>{{ $count }}</h2>
    <button wire:click="decrease" class="bg-red-200 px-4 py-2 rounded-md">-</button>
</div>
