<form wire:submit.prevent="formSubmit">
    <div class="mb-4">
        <label for="name" class="lms-label">Name</label>
    <input wire:model.lazy="name" type="text" id="name" class="lms-input">
    @error('name')
    <div class="text-sm text-red-700 mt-2">
        {{ $message }}
    </div>
    @enderror
    </div>
    <h3 class="font-bold mb-2">Permissions</h3>

        <div class="flex flex-wrap -mx-4">
            @foreach ($permissions as $permission )
            <div class="w-1/3 px-4 mb-4">
                <label class="inline-flex items-center">
                    <input wire:model.lazy="selectedPermissions" type="checkbox"  value="{{ $permission->name }}">
                    <span class="ml-2">{{ $permission->name }}</span>
                </label>
            </div>
            @endforeach
        </div>
        @error('selectedPermissions')
        <div class="text-sm text-red-700 mt-2">
            {{ $message }}
        </div>
        @enderror
        @include('components.wire-loading-btn')
</form>
