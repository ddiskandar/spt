<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\User;

class UpdateEmail extends Component
{
    public $email;

    public function mount()
    {
        $this->email = auth()->user()->email;
    }

    public function update()
    {
        User::where('id', auth()->user()->id)
            ->update([
                'email' => $this->email,
            ]);
        
        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.student.update-email');
    }
}
