<?php

namespace App\Http\Livewire;

use App\Models\Quiz;
use Livewire\Component;

class QuizIndex extends Component
{
    public $quizzes;
    public function render()
    {
        return view('livewire.quiz-index');
    }

    public function deleteQuiz($id){
        Quiz::findOrFail($id)->delete();
        flash()->addWarning('Quiz Deleted Successfully');
        return to_route('quiz.index');

    }
}
