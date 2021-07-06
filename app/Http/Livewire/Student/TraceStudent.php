<?php

namespace App\Http\Livewire\Student;

use App\Models\Trace;
use Livewire\Component;

class TraceStudent extends Component
{
    public $trace;
    public $activity_id;
    public $linear;
    public $pernah_bekerja;
    public $tanggal_masuk;

    public function mount()
    {
        $this->trace = Trace::where('student_id', auth()->user()->student->id)->first();

        $this->activity_id = $this->trace->activity_id;
        $this->pernah_bekerja = $this->trace->pernah_bekerja;
    }

    public function update()
    {
        $this->trace->update([
            'activity_id' => $this->activity_id,
            'pernah_bekerja' => $this->pernah_bekerja,
        ]);

        $this->emit('saved');
    }
    
    public function render()
    {
        return view('livewire.student.trace-student');
    }
}
