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

    protected $queryString = [
        'year',
    ];

    public function mount()
    {
        $this->year = $this->year ?? Year::latest('id')->select('id')->first()->id;

        $this->data = [
            'melanjutkan' => [
                'jumlah' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 3)->count(),
                'linear' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 3)->where('melanjutkan_linear', 1)->count(),
                'tidak_linear' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 3)->where('melanjutkan_linear', 0)->count(),
            ],
            'wirausaha' => [
                'jumlah' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 4)->count(),
                'wirausaha_tiga' => Trace::whereHas('student', function ($query) { $query->whereBetween('year_id', [$this->year - 3,$this->year]); })->with('student')->where('activity_id', 4)->count(),
            ],
            'bekerja' => [
                'jumlah' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 2)->count(),
                'sebelum_lulus' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 2)->where('bekerja_sebelum_lulus', 1)->count(),
                'melalui_bkk' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 2)->where('bekerja_sebelum_lulus', 1)->count(),
                'dudika' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 2)->where('dudika_id')->count(),
                'bukan_dudika' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 2)->where('dudika_id', NULL)->count(),
                'masa_tunggu' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 2)->where('bekerja_masa_tunggu')->count(),
                'linear' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 2)->where('bekerja_linear', 1)->count(),
                'tidak_linear' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 2)->where('bekerja_linear', 0)->count(),
                'umr' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 2)->where('bekerja_gaji_standar_umr', 1)->count(),
                'tidak_umr' => Trace::whereHas('student', function ($query) { $query->where('year_id', $this->year); })->with('student')->where('activity_id', 2)->where('bekerja_gaji_standar_umr', 0)->count(),
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
