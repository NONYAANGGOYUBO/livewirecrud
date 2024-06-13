<?php

namespace App\Livewire;
use App\Models\Address;
use Livewire\Component;

class StudentAdress extends Component
{

    public $adressofstudent;

    public function insertdata(){
        Address::create([
            'adress'=>$this->adressofstudent,
        ]);
    }
    public function render()
    {
        return view('livewire.student-adress');
    }
}
