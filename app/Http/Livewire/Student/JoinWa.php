<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Profile;
use App\Models\Year;

class JoinWa extends Component
{
    public $profile;
    public $link_group;

    public $state = [];

    protected $rules = [
        'state.phone' => 'required|string|max:13',
        'state.join_wa' => 'required|in:0,1',
    ];

    protected $validationAttributes = [
        'state.phone' => 'Nomor HP/WA',
        'state.join_wa' => 'Status gabung grup',
    ];

    public function mount()
    {
        $this->link_group = Year::query()
            ->find( auth()->user()->student->year_id );

        $this->profile = Profile::query()
            ->whereStudentId( auth()->user()->student->id )
            ->first();

        $this->state = $this->profile->toArray();

    }

    public function update()
    {
        $this->validate();

        $this->profile->update([
            'phone' => $this->state['phone'],
            'join_wa' => $this->state['join_wa'],
        ]);

        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.student.join-wa');
    }
}
