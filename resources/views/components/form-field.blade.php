<div class="mb-4">

    @if ($type == 'textarea')
    <label for="{{ $name }}" class="lms-label">{{ $label }}</label>
    <textarea wire:model.lazy="{{ $name }}" type="{{ $type }}" id="{{ $name }}" class="lms-input" placeholder="{{ $placeholder }}" {{ $required }}></textarea>
        @error($name)
        <div class="text-sm text-red-700 mt-2">
            {{ $message }}
        </div>
        @enderror
        @elseif ($type == 'text')
            <label for="{{ $name }}" class="lms-label">{{ $label }}</label>
            <input wire:model.lazy="{{ $name }}" type="{{ $type }}" id="{{ $name }}" class="lms-input" placeholder="{{ $placeholder }}" {{ $required }} >
            @error($name)
            <div class="text-sm text-red-700 mt-2">
                {{ $message }}
            </div>
            @enderror
        @else
        <label for="{{ $name }}" class="lms-label">{{ $label }}</label>
        <input wire:model.lazy="{{ $name }}" type="{{ $type }}" id="{{ $name }}" class="lms-input" placeholder="{{ $placeholder }}" {{ $required }} >
        @error($name)
        <div class="text-sm text-red-700 mt-2">
            {{ $message }}
        </div>
        @enderror
    @endif

</div>
