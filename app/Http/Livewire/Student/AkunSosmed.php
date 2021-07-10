<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Profile;

class AkunSosmed extends Component
{
    public $profile;

    public $state = [];

    protected $rules = [
        'state.facebook' => 'nullable|alpha_dash|max:128',
        'state.instagram' => 'nullable|alpha_dash|max:128',
        'state.twitter' => 'nullable|alpha_dash|max:128',
        'state.youtube' => 'nullable|alpha_dash|max:128',
        'state.linkedin' => 'nullable|alpha_dash|max:128',
    ];

    protected $validationAttributes = [
        'state.facebook' => 'facebook',
        'state.instagram' => 'instagram',
        'state.twitter' => 'twitter',
        'state.youtube' => 'youtube',
        'state.linkedin' => 'linkedin',
    ];

    public function mount()
    {
        $this->profile = Profile::query()
            ->where('student_id', auth()->user()->student->id)->firstOrNew();

        $this->state = $this->profile->toArray();
    }

    public function update()
    {
        $this->validate();

        $this->profile->update([
            'facebook' => $this->state['facebook'],
            'instagram' => $this->state['instagram'],
            'twitter' => $this->state['twitter'],
            'youtube' => $this->state['youtube'],
            'linkedin' => $this->state['linkedin'],
        ]);

        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.student.akun-sosmed');
    }
}
