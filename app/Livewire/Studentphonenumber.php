<?php

namespace App\Livewire;
use App\Models\Phonenumber;
use Livewire\Component;

class Studentphonenumber extends Component
{

    public $mobilenumber;

    // public $contacts;

    public function studentnumber(){
        Phonenumber::create([
            'phnumber'=>$this->mobilenumber,
        ]);
        $this->reset('mobilenumber');
    }

    // public function mount()
    // {
    //     $contacts = Phonenumber::all(); // Fetch all contacts
    // }
    public function render()
    {
        $contacts = Phonenumber::all(); // Fetch all contacts
        return view('livewire.studentphonenumber',[
            'contacts' => $contacts,

            ]
        );

    }
}
