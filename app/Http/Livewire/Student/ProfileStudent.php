<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Profile;

class ProfileStudent extends Component
{
    public $profile;
    public $testimoni;
    public $saran;
    public $address;

    protected $rules = [
        'testimoni' => 'required|string|max:512',
        'saran' => 'required|string|max:512',
        'address' => 'required|string|max:512',
    ];

    public function mount()
    {
        $this->profile = Profile::where('student_id', auth()->user()->student->id)->firstOrNew();
        $this->testimoni = $this->profile->testimoni;
        $this->saran = $this->profile->saran;
        $this->address = $this->profile->address;
    }

    public function update()
    {
        $this->validate();

        $this->profile->update([
            'testimoni' => $this->testimoni,
            'saran' => $this->saran,
            'address' => $this->address,
        ]);

        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.student.profile-student');
    }
}
