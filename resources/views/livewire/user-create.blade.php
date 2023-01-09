<form wire:submit.prevent="formSubmit">
    <div class="flex items-center">
        <div class="flex-1 mb-2">
            <label for="name">Name</label>
            <input wire:model.lazy="name" type="text">
            @error('name')
            <div class="text-sm text-red-700 mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="flex-1 mb-2">
            <label for="email">Email</label>
            <input wire:model.lazy="email" type="email">
            @error('email')
            <div class="text-sm text-red-700 mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="flex-1 mb-2">
            <label for="password">Password</label>
            <input wire:model.lazy="password" type="password">
            @error('password')
            <div class="text-sm text-red-700 mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="mb-4">
        <label for="role" class="lms-label">Role</label>
        <select wire:model.lazy="role" id="role" class="lms-input">
            <option value="">Select Role</option>
            @foreach ($roles as $role )
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
        @error('role')
            <div class="text-sm text-red-700 mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    @include('components.wire-loading-btn')
</form>
