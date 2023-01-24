<x-app-layout>
    <x-slot name="header">
       <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Quiz') }}
        </h2>
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- <livewire:quiz-create /> --}}
                    <form action="{{ route('quiz.store') }}" method="post">
                        @csrf
                        <label class="lms-label" for="quiz">Name</label>
                        <input type="text" name="name" class="lms-input @error('name') is-invalid
                        @enderror">
                        @error('name')
                            <div class="text-red-500"><small>{{ $message }}</small></div>
                        @enderror
                        <button class="lms-btn mt-4" type="submit" >Add a Quiz</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
