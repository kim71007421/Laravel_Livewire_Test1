<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\UsersModel;

class Users extends Component
{	
    public function render()
    {		
        return view('livewire.users');
    }
}
