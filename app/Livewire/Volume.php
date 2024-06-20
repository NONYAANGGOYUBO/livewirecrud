<?php

namespace App\Livewire;
use App\Models\watervolume;
use Livewire\Component;

class Volume extends Component
{
    public $ishi;
    public function ishistore()
    {
        watervolume::create([
            'capacity'=>$this->ishi,
        ]);
        $this->reset('ishi');
    }
    public function render()
    {
        $watercapacity = watervolume::all();//fetch all data of watervolume table  from watervolume models
        return view('livewire.volume',
        [
            'ishicapacity'=>$watercapacity,

        ]);
    }
}
