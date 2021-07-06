<?php

namespace App\Http\Livewire\Student;

use App\Models\Trace;
use Livewire\Component;

class TraceStudent extends Component
{
    public $trace;

    public $state = [];

    protected $rules = [
        'state.activity_id' => 'required',
        'state.linear' => 'nullable',
        'state.pernah_bekerja' => 'nullable',
        'state.tanggal_masuk' => 'nullable',
        'state.melanjutkan_kampus' => 'nullable',
        'state.melanjutkan_prodi' => 'nullable',
        'state.dudika_id' => 'nullable',
        'state.bekerja_nama' => 'nullable',
        'state.bekerja_sebelum_lulus' => 'nullable',
        'state.bekerja_melalui_bkk' => 'nullable',
        'state.bekerja_masa_tunggu' => 'nullable',
        'state.bekerja_gaji_standar_umr' => 'nullable',
        'state.income_id' => 'nullable',
        'state.profession_id' => 'nullable',
        'state.bond_id' => 'nullable',
        'state.business_id' => 'nullable',
        'state.business_name' => 'nullable',
    ];

    protected $validationAttributes = [
        'state.activity_id' => 'activity_id',
        'state.linear' => 'linear',
        'state.pernah_bekerja' => 'pernah_bekerja',
        'state.tanggal_masuk' => 'tanggal_masuk',
        'state.melanjutkan_kampus' => 'melanjutkan_kampus',
        'state.melanjutkan_prodi' => 'melanjutkan_prodi',
        'state.dudika_id' => 'dudika_id',
        'state.bekerja_nama' => 'bekerja_nama',
        'state.bekerja_sebelum_lulus' => 'bekerja_sebelum_lulus',
        'state.bekerja_melalui_bkk' => 'bekerja_melalui_bkk',
        'state.bekerja_masa_tunggu' => 'bekerja_masa_tunggu',
        'state.bekerja_gaji_standar_umr' => 'bekerja_gaji_standar_umr',
        'state.income_id' => 'income_id',
        'state.profession_id' => 'profession_id',
        'state.bond_id' => 'bond_id',
        'state.business_id' => 'business_id',
        'state.business_name' => 'business_name',
    ];

    public function mount()
    {
        $this->trace = Trace::query()
            ->where('student_id', auth()->user()->student->id)
            ->first();

        $this->state = $this->trace->toArray();
    }

    public function update()
    {
        $this->validate();
        
        $this->trace->update([
            'activity_id' => $this->state['activity_id'],
            'linear' => $this->state['linear'],
            'pernah_bekerja' => $this->state['pernah_bekerja'],
            'tanggal_masuk' => $this->state['tanggal_masuk'],
            'melanjutkan_kampus' => $this->state['melanjutkan_kampus'],
            'melanjutkan_prodi' => $this->state['melanjutkan_prodi'],
            'dudika_id' => $this->state['dudika_id'],
            'bekerja_nama' => $this->state['bekerja_nama'],
            'bekerja_sebelum_lulus' => $this->state['bekerja_sebelum_lulus'],
            'bekerja_melalui_bkk' => $this->state['bekerja_melalui_bkk'],
            'bekerja_masa_tunggu' => $this->state['bekerja_masa_tunggu'],
            'bekerja_gaji_standar_umr' => $this->state['bekerja_gaji_standar_umr'],
            'income_id' => $this->state['income_id'],
            'profession_id' => $this->state['profession_id'],
            'bond_id' => $this->state['bond_id'],
            'business_id' => $this->state['business_id'],
            'business_name' => $this->state['business_name'],
        ]);

        $this->emit('saved');
    }
    
    public function render()
    {
        return view('livewire.student.trace-student');
    }
}
