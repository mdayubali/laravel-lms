<?php

namespace App\Http\Livewire;

use Flasher\SweetAlert\Prime\SweetAlertFactory;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public function render()
    {
        return view('livewire.counter');
    }
    public function increase(){
        $this->count++;
    }
    public function decrease(SweetAlertFactory $flasher){
        if($this->count > 0 ){
            $this->count--;
        }else{
            // flash()->addWarning('Counter should greater than 0!');
            $flasher->addWarning('Counter should greater than 0 ');
        }

    }
}
