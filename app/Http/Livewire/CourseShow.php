<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseShow extends Component
{
    public $course_id;
    public function render()
    {
        $course = Course::findOrFail($this->course_id);
        return view('livewire.course-show',[
            'course' => $course
        ]);
    }
}
