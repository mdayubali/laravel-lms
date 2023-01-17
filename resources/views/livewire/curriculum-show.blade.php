<div>

    <h1 class="font-bold mb-2 underline">{{$curriculum->course->name}}</h1>
    <p class="mb-4 italic">Price: ${{$curriculum->course->price}}</p>
    <p class="pb-6">{{$curriculum->course->description}}</p>

    <h2 class="font-bold mb-2">Class</h2>
    <p class="text-gray-600 mb-4"><span>Name: </span>{{$curriculum->name}}</p>
    <h2 class="font-bold mb-2">Students - Present - {{$curriculum->presentStudents()}} | Absent {{$curriculum->course->students()->count() - $curriculum->presentStudents()}}</h2>

    <h2 class="font-bold text-xl my-2">Student Details</h2>
    <table class="w-full table-auto">
        <thead>
            <tr>
                <th class="border py-2 px-4 text-left">Name</th>
                <th class="border py-2 px-4 text-left">Email</th>
                <th class="border py-2 px-4 text-center">Attendance</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($curriculum->course->students as $student )
            <tr>
                <td class="border py-2 px-4 text-left">{{ $student->name }}</td>
                <td class="border py-2 px-4 text-left">{{ $student->email }}</td>
                <td class="border py-2 px-4">
                <div class="flex items-center justify-center">
                    @if($student->is_present($curriculum->id))
                    Presented
                @else
                    <button wire:click="attendance({{ $student->id }})"class="bg-green-600 py-2 px-3 rounded text-white">Present</button>
                @endif
                {{-- <button wire:click="attendance('absent')" class="bg-red-600 py-2 px-3 rounded text-white">Absent</button> --}}
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h2 class="font-bold text-xl my-2">Notes</h2>

    @if (count($notes)>0)
    @foreach($notes as $note)
    <div class="mb-4 border border-gray-100 p-4">{{$note->description}}</div>
    @endforeach
    @else
    <p class="py-4 text-red-400">Not Found Any Note!</p>
    @endif

    <h4 class="font-bold mb-2">Add new note</h4>
    <form wire:submit.prevent="addNote">
        <label for="notes"></label>
        <textarea wire:model="note" id="notes"class="lms-input"></textarea>
        <button class="lms-btn my-3">Add Notes</button>
    </form>

</div>
