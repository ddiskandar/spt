<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Student;
use App\Models\Profile;

class JoinWa extends Component
{
    public $profile;

    public $student;

    public $join_wa;
    public $phone;

    protected $rules = [
        'phone' => 'required|string|max:13',
        'join_wa' => 'required',
    ];

    protected $validationAttributes = [
        'phone' => 'Nomor HP/WA',
        'join_wa' => 'Pilihan Gabung Grup',
    ];

    public function mount(Student $student)
    {
        $profile = Profile::whereStudentId($student->id)->firstOrNew();

        $this->profile = $profile;

        $this->join_wa = $profile->join_wa;
        $this->phone = $student->phone;
        $this->student = $student;
    }

    public function update()
    {
        $this->validate();

        $this->profile->updateOrCreate([
            ['student_id' => $this->student->id],
            ['join_wa' => $this->join_wa ? 1 : 0],
        ]);

        $this->student->update([
            'phone' => $this->phone,
        ]);

        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.student.join-wa');
    }
}
