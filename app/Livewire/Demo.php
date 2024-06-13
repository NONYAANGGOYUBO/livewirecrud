<?php

namespace App\Livewire;
use App\Models\test;
use Livewire\Component;

class Demo extends Component
{
    public $amin;
    public $email;
    public function tryy(){
        test::create([
            'name'=>$this->amin,
            'email'=>$this->email,

        ]);
    }
    public function render()
    {
        return view('livewire.demo');
    }
}
