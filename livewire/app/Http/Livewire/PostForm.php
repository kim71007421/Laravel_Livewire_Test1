<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostForm extends Component
{
    public $firstName;
    public $lastName;

    protected $rules = [
        'firstName' => 'required|string|min:1|max:20',
        'lastName'  => 'required|string|min:1|max:20',
    ];

    public function saveForm()
    {
        $this->validate();
        dd($validatedData);
    }

    public function render()
    {
        return view('livewire.postform');
    }
}
