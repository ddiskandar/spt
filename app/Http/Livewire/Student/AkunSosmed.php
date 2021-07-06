<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Profile;

class AkunSosmed extends Component
{
    public $profile;

    public $facebook;
    public $instagram;
    public $twitter;
    public $youtube;
    public $linkedin;

    protected $rules = [
        'facebook' => 'required|string|max:512',
        'instagram' => 'required|string|max:512',
        'twitter' => 'required|string|max:512',
        'youtube' => 'required|string|max:512',
        'linkedin' => 'required|string|max:512',
    ];

    public function mount()
    {
        $this->profile = Profile::where('student_id', auth()->user()->student->id)->firstOrNew();;
        $this->facebook = $this->profile->facebook;
        $this->instagram = $this->profile->instagram;
        $this->twitter = $this->profile->twitter;
        $this->youtube = $this->profile->youtube;
    }

    public function update()
    {
        $this->validate();

        $this->profile->update([
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'twitter' => $this->twitter,
            'youtube' => $this->youtube,
        ]);

        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.student.akun-sosmed');
    }
}
