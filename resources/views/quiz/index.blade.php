<x-app-layout>
    <x-slot name="header">
       <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz') }}
        </h2>
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex min-w-max justify-end mb-4">
                        <a class="text-center py-3 px-3 rounded bg-blue-500 text-white" href="{{ route('quiz.create') }}" >Add a Quiz</a>
                    </div>
                    <livewire:quiz-index :quizzes="$quizzes" />

                    {{-- {{ $quizzes }} --}}
                    {{-- @php
                    $i = 1;
                    @endphp
                    <table class="w-full table-auto">
                        <tr>
                            <th class="border text-center">Serial</th>
                            <th class="border text-center">Quiz</th>
                            <th class="border text-center">Action</th>
                        </tr>
                        @foreach ($quizzes as $quiz)

                        <tr>
                            <td class="border text-center">{{ $i++ }}</td>
                            <td class="border text-center">{{ $quiz->name }}</td>
                            <td class="border text-center">
                                <div class="flex justify-center items-center">
                                    <a href="{{ route('quiz.edit', $quiz->id) }}" class="mr-3 px-3 py-2 bg-gray-400 rounded">@include('components.icons.edit')</a>
                                    <a class="mr-3 px-3 py-2 bg-green-600 rounded" href="{{ route('quiz.show',$quiz->id) }}">@include('components.icons.view')</a>
                                    <button class="mr-3 px-3 py-2 bg-red-600 rounded" href="{{ route('quiz.destroy',$quiz->id) }}">@include('components.icons.delete')</button>

                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
