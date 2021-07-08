<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Profile;

class ProfileStudent extends Component
{
    public $profile;
    
    public $state = [];

    protected $rules = [
        'state.testimoni' => 'required|string|max:512',
        'state.saran' => 'required|string|max:512',
    ];

    protected $validationAttributes = [
        'state.testimoni' => 'testimoni',
        'state.saran' => 'saran',
    ];

    public function mount()
    {
        $this->profile = Profile::query()
            ->where('student_id', auth()->user()->student->id)
            ->first();
        
        $this->state = $this->profile->toArray();
    }

    public function update()
    {
        $this->validate();

        $this->profile->update([
            'testimoni' => $this->state['testimoni'],
            'saran' => $this->state['saran'],
        ]);

        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.student.profile-student');
    }
}
