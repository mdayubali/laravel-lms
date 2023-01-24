<?php

namespace App\Http\Livewire;

use App\Models\Question;
use Livewire\Component;

class QuestionIndex extends Component
{
    public $questions;
    public function render()
    {

        return view('livewire.question-index',[
            'questions' => $this->questions
        ]);
    }
}
