<?php

namespace App\Livewire;
use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Todolist extends Component
{
    #[Rule('required|min:3|max:34')]
    public $name;

    public $search;

    public function create2(){
        // validate
        // create the todo
        // clear the input
        // send flash message
        // dd($this->name);

        $validated=$this->validateOnly('name');

        // $validated=$this->validate();

        Todo::create($validated);

        $this->reset('name');

        session()->flash('success','created');
    }
    public function render()
    {
        return view('livewire.todolist');
    }
}
