<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Year;

class Rekap extends Component
{
    public $year;

    public function mount()
    {
        $this->year = Year::latest('id')->select('id')->first()->id;
    }

    public function render()
    {
        return view('livewire.rekap');
    }
}
