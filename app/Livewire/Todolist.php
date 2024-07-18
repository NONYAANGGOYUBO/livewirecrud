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

    public $editingtodoid;

    #[Rule('required|min:3|max:34')]
    public $editingtodoname;


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
        $this->resetPage();
    }

    // delete function
    public function delete($todoID){
        Todo::find($todoID)->delete();
    }

    public function toggle($todoID){
        $todos = Todo::find($todoID);
        $todos->status = !$todos->status;
        $todos->save();
    }

    public function edit($todoID)
    {
        $this->editingtodoid= $todoID;
        $this->editingtodoname=Todo::find($todoID)->name;
    }

    public function canceledit()
    {
        $this->reset('editingtodoid','editingtodoname');
    }

    public function update()
    {
        $this->validateOnly('editingtodoname');
        Todo::find($this->editingtodoid)->update(['name'=>$this->editingtodoname]);
        session()->flash('variableforupdate','user updated successfully');
        $this->canceledit();

    }

    public function render()
    {
        return view('livewire.todolist',[
            'todos'=>Todo::latest()->where('name','like',"%{$this->search}%")->paginate(3)
    ]);
    }
}
