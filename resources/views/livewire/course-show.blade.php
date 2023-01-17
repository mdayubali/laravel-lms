<div class="container">
    <h2 class="font-bold text-2xl">{{ $course->name }}</h2>
    <p>Price : <span class="font-semibold">{{ $course->price }}</span></p>
    <p class="py-3">{{ $course->description }}</p>
    <h2 class="font-bold text-xl">Classes</h2>
    <table class="w-full table-auto">
        <thead>
            <tr>
                <th class="border py-2 px-4 text-left">Name</th>
                <th class="border py-2 px-4 text-left">Description</th>
                <th class="border py-2 px-4 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
          
                <td class="border py-2 px-4">{{ $course->name }}</td>
                <td class="border py-2 px-4">{{ $course->description }}</td>
                <td class="border py-2 px-4">
                    <a href="{{ route('class.show',$course->id) }}">
                    @include('components.icons.view')
                    </a>
                </td> 
         

            {{-- @foreach ($curriculums as $class)
            <tr>
                <td class="border px-4 py-2">{{$class->name}}</td>
                <td class="border px-4 py-2">
                    <div class="flex items-center justify-center">
                        <a class="mr-1" href="{{route('class.edit',$class->id)}}">
                            @include('components.icons.edit')
                        </a>
    
                        <a class="mr-1" href="{{route('class.show', $class->id)}}">
                            @include('components.icons.view')
                        </a>
    
                        <form class="ml-1" onsubmit="return confirm('Are you sure?');"
                            wire:submit.prevent="curriculamDelete({{$class->id}})">
                            <button type="submit">
                                @include('components.icons.delete')
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach --}}


        </tbody>

    </table>
</div>
