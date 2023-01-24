<div>
    {{-- {{ dd($questions) }} --}}
    <table class="w-full table-auto">
        <tr>
            <th class="border text-center">Serial</th>
            <th class="border text-center">Question</th>
            <th class="border text-center">Correct Answer</th>
            <th class="border text-center">Action</th>
        </tr>
        @foreach ($questions as $question)
        <tr>
            <td class="border text-center">{{ $question->id }}</td>
            <td class="border text-center">{{ $question->name }}</td>
            <td class="border text-center">{{ $question->correct_answer }}</td>
            <td class="border text-center">
                <div class="flex justify-center items-center">
                    <a href="{{ route('question.edit', $question->id) }}" class="mr-3 px-3 py-2 bg-gray-400 rounded">@include('components.icons.edit')</a>
                    <a class="mr-3 px-3 py-2 bg-green-600 rounded">@include('components.icons.view')</a>
                    <a class="mr-3 px-3 py-2 bg-red-600 rounded">@include('components.icons.delete')</a>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>
