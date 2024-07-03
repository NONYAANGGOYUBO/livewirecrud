<?php

namespace App\Livewire;
use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Todolist extends Component
{
    use WithPagination;

    #[Rule('required|min:3|max:34')]
    public $name;

    public $status;

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

        $this->reset('name','status');

        session()->flash('successvariable','user created successfully');
    }

    // delete function
    public function delete($todoID){
        Todo::find($todoID)->delete();
    }

    public function toggle($todoID){
        $todos = Todo::find($todoID);
        $todos->completed = !$todos->completed;
        $todos->save();
    }
    public function render()
    {
        return view('livewire.todolist',[
            'todos'=>Todo::latest()->where('name','like',"%{$this->search}%")->paginate(3)
    ]);
    }
}
