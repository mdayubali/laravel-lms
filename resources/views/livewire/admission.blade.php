<div>
    <form wire:submit.prevent="searchResult">
        <div class="flex mb-4">
            <label for="search" class="lms-label"></label>
            <input wire:model="search"  type="text" placeholder="Search Here" required class="lms-input" value="{{ old('search') }}">
            <span class="ml-2"><button class="lms-btn">Search</button></span>
        </div>
    </form>
        @if (count($leads) > 0)
            <form wire:submit.prevent="admit">
                <div class="mb-4">
                    <select wire:model.lazy="lead_id" class="lms-input">
                        <option value="">Select Lead</option>
                        @foreach ($leads as $lead)
                            <option value="{{ $lead->id }}">{{ $lead->name }} - {{ $lead->phone  }}</option>
                        @endforeach
                    </select>
                </div>
                @if (!@empty($lead_id))
                    <div class="mb-4">
                        <select wire:change="courseSelected" wire:model.lazy="course_id" class="lms-input">
                            <option value="">Select Course</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                    @if (!@empty($selectedCourse))
                        <p class="mb-2">Price : ${{ number_format($selectedCourse->price,2) }}</p>
                       <div class="mb-4">
                        <input wire:model="payment" type="number" step=".01" class="lms-input" max="{{ number_format($selectedCourse->price,2) }}" placeholder="Pay now">
                       </div>
                       @include('components.wire-loading-btn')
                    @endif

            </form>

        @endif
</div>


