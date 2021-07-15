<?php

namespace App\Http\Livewire;

use App\Models\Student;
use App\Models\Trace;
use Livewire\Component;
use App\Models\Year;

class Rekap extends Component
{
    public $year;
    public $data;

    public function mount()
    {
        $this->year = $this->year ?? Year::latest('id')->select('id')->first()->id;

        // $students = Student::where('year_id', $this->year)->with('trace');

        $traces = Trace::whereHas('student', function ($query) {
            $query->where('year_id', $this->year);
        })->with('student');

        // ddd($traces);
        
        
        $this->data = [
            'bekerja' => [
                'jumlah' => $traces->where('activity_id', 2)->count(),
                'sebelum_lulus' => $traces->where('activity_id', 2)->where('bekerja_sebelum_lulus', 1)->count(),
                'melalui_bkk' => $traces->where('activity_id', 2)->where('bekerja_sebelum_lulus', 1)->count(),
                'dudika' => $traces->where('activity_id', 2)->where('dudika_id')->count(),
                'bukan_dudika' => $traces->where('activity_id', 2)->where('dudika_id', NULL)->count(),
                'masa_tunggu' => $traces->where('activity_id', 2)->where('bekerja_masa_tunggu')->count(),
                'linear' => $traces->where('activity_id', 2)->where('bekerja_linear', 1)->count(),
                'tidak_linear' => $traces->where('activity_id', 2)->where('bekerja_linear', 0)->count(),
                'umr' => $traces->where('activity_id', 2)->where('bekerja_gaji_standar_umr', 1)->count(),
                'tidak_umr' => $traces->where('activity_id', 2)->where('bekerja_gaji_standar_umr', 0)->count(),
            ],
            'melanjutkan' => [
                'jumlah' => $traces->where('activity_id', 3)->count(),
                'linear' => $traces->where('activity_id', 3)->where('melanjutkan_linear', 1)->count(),
                'tidak_linear' => $traces->where('activity_id', 3)->where('melanjutkan_linear', 0)->count(),
            ],
            'wirausaha' => [
                'jumlah' => $traces->where('activity_id', 4)->count(),
                
            ],
        ];
    }
    

    public function updatedYear()
    {
        $this->mount();
    }

    public function render()
    {
        return view('livewire.rekap');
    }
}
