<div>

        <form wire:submit.prevent="submitForm">
        <div class="flex -mx-4">
            <div class="flex-1 px-4">
                <label for="name" class="lms-label">Name</label>
                <input wire:model.lazy="name" type="text" class="lms-input">
                @error('name')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex-1 px-4">
                <label for="email" class="lms-label">Email</label>
                <input wire:model.lazy="email" type="email" class="lms-input">
                @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex-1 px-4">
                <label for="phone" class="lms-label">Phone</label>
                <input wire:model.lazy="phone" type="text" class="lms-input">
                @error('phone')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        </div>
        @include('components.wire-loading-btn')
        </form>

        <h3 class="font-bold mt-5">Notes</h3>
        @foreach ($notes as $note )
            <p class="shadow-sm bg-gray-100 py-3 px-2 mb-3">{{ $note->description }}</p>
        @endforeach
        <h2 class="font-bold mt-5">Add New Note</h2>
        <form wire:submit.prevent="addNote">
            <textarea wire:model.lazy="note" id="note" class="lms-input mb-5"></textarea>
            <button type="submit" class="bg-blue-500 px-4 py-3 rounded">Save</button>
        </form>

</div>
