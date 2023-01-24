<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

class QuizShow extends Component
{
    public $quiz;
    // public $question_id;

    public function render()
    {
        $questions = Question::all();
        
        return view('livewire.quiz-show',[
            'questions'=> $questions
        ]);
    }

}
