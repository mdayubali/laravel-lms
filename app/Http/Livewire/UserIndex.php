<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.user-index',[
            'users' =>  $users,
        ]);
    }
   
    public function userDelete($id){
        $user = User::findOrFail($id);
        $user->delete();
        flash()->addInfo('User Delete Successfully');
    }
}
