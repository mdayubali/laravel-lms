<div class="container">
    <h2 class="font-bold text-2xl">{{ $course->name }}</h2>
    <p>Price : <span class="font-semibold">{{ $course->price }}</span></p>
    <p class="py-3">{{ $course->description }}</p>
    <h2 class="font-bold text-xl">Classes</h2>
    <table class="w-full table-auto">
        <thead>
            <tr>
                <th class="py-2 px-4 text-left">Name</th>
                <th class="py-2 px-4 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($course as $item ) --}}
                <td class="border py-2 px-4">{{ $course->name }}</td>
                <td class="border py-2 px-4">{{ $course->description }}</td>
                <td class="border py-2 px-4">
                    <a href="{{ route('course.show',$course->id) }}">
                    @include('components.icons.view')
                    </a>
                </td>
            {{-- @endforeach --}}
        </tbody>

    </table>
</div>
