<x-app-layout>
    <x-slot name="header">
       <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Signle Courses') }}
        </h2>
        <a href="{{ route('course.index') }}" class="lms-btn">All Courses</a>
       </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- <livewire:course-show :course_id="$course"/>
                     --}}
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
                                @foreach ($course->curricula as $item )
                                   <tr>
                                    <td class="border py-2 px-4 text-left">{{ $item->name }} abc</td>
                                    <td class="border py-2 px-4">
                                        <a class="flex justify-center" href="{{ route('course.show',$item->id) }}">
                                        @include('components.icons.view')
                                        </a>
                                    </td>
                                   </tr>
                                 @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
