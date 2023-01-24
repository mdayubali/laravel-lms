<div>
    @php
    $i = 1;
    @endphp
     @if ( $quizzes->count() > 0)
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
                       <button wire:click="deleteQuiz({{ $quiz->id }})" class="mr-3 px-3 py-2 bg-red-600 rounded" type="submit">@include('components.icons.delete')</button>
                   </div>
               </td>
            </tr>
            @endforeach
            @else
            <h2 class="text-2xl text-red-500">Quiz are Not Available.</h2>
        @endif

    </table>

</div>
