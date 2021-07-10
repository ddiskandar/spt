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
        'state.linear' => 'required_if:state.activity_id,!=,1',
        'state.pernah_bekerja' => 'required',
        'state.tanggal_masuk' => 'nullable',
        'state.melanjutkan_kampus' => 'required_if:state.activity_id,3|string|max:64',
        'state.melanjutkan_prodi' => 'required_if:state.activity_id,3|string|max:64',
        'state.dudika_id' => 'nullable',
        'state.bekerja_nama' => 'required_if:state.activity_id,2|max:64',
        'state.bekerja_sebelum_lulus' => 'required_if:state.activity_id,2',
        'state.bekerja_melalui_bkk' => 'required_if:state.activity_id,2',
        'state.bekerja_masa_tunggu' => 'required_if:state.activity_id,2',
        'state.bekerja_gaji_standar_umr' => 'required_if:state.activity_id,2',
        'state.income_id' => 'required_if:state.activity_id,2',
        'state.profession_id' => 'required_if:state.activity_id,2',
        'state.bond_id' => 'required_if:state.activity_id,2',
        'state.business_id' => 'required_if:state.activity_id,2',
        'state.business_name' => 'required_if:state.activity_id,4|max:64',
    ];

    protected $messages = [
        'state.melanjutkan_kampus.required_if' => 'Nama Perguruan tinggi harus di isi',
        'state.melanjutkan_prodi.required_if' => 'Program studi harus di isi',

        'state.bekerja_nama.required_if' => 'Nama perusahaan harus diisi',
        'state.bekerja_sebelum_lulus.required_if' => 'harus diisi',
        'state.bekerja_melalui_bkk.required_if' => 'harus diisi',
        'state.bekerja_masa_tunggu.required_if' => 'harus diisi',
        'state.bekerja_gaji_standar_umr.required_if' => 'harus diisi',
        'state.income_id.required_if' => 'Penghasilan harus diisi',
        'state.profession_id.required_if' => 'Pekerjaan harus diisi',
        'state.bond_id.required_if' => 'harus diisi',
        'state.business_id.required_if' => 'harus diisi',
        'state.business_name.required_if' => 'Nama perusahaan harus diisi',
    ];

    protected $validationAttributes = [
        'state.activity_id' => 'kegiatan',
        'state.linear' => 'linear',
        'state.pernah_bekerja' => 'pernah bekerja',
        'state.tanggal_masuk' => 'tanggal mulai',
        'state.melanjutkan_kampus' => 'nama perguruan tinggi',
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
        'state.business_id' => 'bidang bisnis',
        'state.business_name' => 'nama usaha',
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
