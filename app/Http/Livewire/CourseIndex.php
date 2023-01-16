<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseIndex extends Component
{
    public function render()
    {
        $courses = Course::all();
        return view('livewire.course-index',[
            'courses' => $courses
        ]);
    }
    public function deleteCourse($id){

        $course = Course::findOrFail($id);
        $course->delete();
        flash()->addInfo('Course Deleted Successfully');
    }
}
