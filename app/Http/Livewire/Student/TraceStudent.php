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

        'state.melanjutkan_linear' => 'nullable|required_if:state.activity_id,3',
        'state.melanjutkan_tanggal_mulai' => 'nullable|required_if:state.activity_id,3|date',
        'state.melanjutkan_kampus' => 'nullable|required_if:state.activity_id,3|string|max:64',
        'state.melanjutkan_prodi' => 'nullable|required_if:state.activity_id,3|string|max:64',
        
        'state.bekerja_linear' => 'nullable|required_if:state.activity_id,2',
        'state.bekerja_tanggal_mulai' => 'nullable|required_if:state.activity_id,2|date',
        'state.bekerja_sebelum_lulus' => 'nullable|required_if:state.activity_id,2',
        'state.bekerja_masa_tunggu' => 'nullable|required_if:state.activity_id,2',
        'state.bekerja_melalui_bkk' => 'nullable|required_if:state.activity_id,2',
        'state.bekerja_nama' => 'nullable|required_if:state.activity_id,2|max:64',
        'state.dudika_id' => 'nullable',
        'state.bekerja_bidang_bisnis' => 'nullable|required_if:state.activity_id,2',
        'state.profession_id' => 'nullable|required_if:state.activity_id,2',
        'state.bond_id' => 'nullable|required_if:state.activity_id,2',
        'state.bekerja_penghasilan' => 'nullable|required_if:state.activity_id,2',
        'state.bekerja_gaji_standar_umr' => 'nullable|required_if:state.activity_id,2',
        
        'state.wirausaha_nama' => 'nullable|string|required_if:state.activity_id,4|max:64',
        'state.wirausaha_bidang_bisnis' => 'nullable|required_if:state.activity_id,4',
        'state.wirausaha_penghasilan' => 'nullable|required_if:state.activity_id,4',
        
        'state.pernah_bekerja' => 'nullable|required_unless:state.activity_id,2',
    ];

    protected $messages = [
        'state.activity_id.required' => 'Pilih salah satu aktivitas',
        'state.pernah_bekerja.required_unless' => 'Keterangan pernah bekerja harus dipilih',

        'state.melanjutkan_linear.required_if' => 'Keterangan linear harus dipilih',
        'state.melanjutkan_tanggal_mulai.required_if' => 'Tanggal masuk harus diisi',
        'state.melanjutkan_kampus.required_if' => 'Nama perguruan tinggi harus diisi',
        'state.melanjutkan_prodi.required_if' => 'Program studi harus diisi',

        'state.bekerja_linear.required_if' => 'Keterangan linear harus dipilih',
        'state.bekerja_tanggal_mulai.required_if' => 'Tanggal masuk harus diisi',
        'state.bekerja_sebelum_lulus.required_if' => 'Harus diisi',
        'state.bekerja_masa_tunggu.required_if' => 'Masa tunggu harus diisi',
        'state.bekerja_melalui_bkk.required_if' => 'Harus diisi',
        'state.bekerja_nama.required_if' => 'Nama perusahaan harus diisi',
        //
        'state.bekerja_bidang_bisnis.required_if' => 'harus dipilih',
        'state.profession_id.required_if' => 'harus dipilih',
        'state.bond_id.required_if' => 'harus dipilih',
        'state.bekerja_penghasilan.required_if' => 'harus dipilih',
        'state.bekerja_gaji_standar_umr.required_if' => 'harus dipilih',

        //
        'state.wirausaha_nama.required_if' => 'Nama bisnis harus diisi',
        'state.wirausaha_bidang_bisnis.required_if' => 'Bidang usaha harus dipilih',
        'state.wirausaha_penghasilan.required_if' => 'Penghasilan harus dipilih',

    ];

    protected $validationAttributes = [
        'state.activity_id' => 'Aktivitas',

        'state.melanjutkan_linear' => 'melanjutkan_linear',
        'state.melanjutkan_tanggal_mulai' => 'melanjutkan_tanggal_mulai',
        'state.melanjutkan_kampus' => 'melanjutkan_kampus',
        'state.melanjutkan_prodi' => 'melanjutkan_prodi',

        'state.bekerja_linear' => 'bekerja_linear',
        'state.bekerja_tanggal_mulai' => 'bekerja_tanggal_mulai',
        'state.bekerja_sebelum_lulus' => 'bekerja_sebelum_lulus',
        'state.bekerja_masa_tunggu' => 'bekerja_masa_tunggu',
        'state.bekerja_melalui_bkk' => 'bekerja_melalui_bkk',
        'state.bekerja_nama' => 'bekerja_nama',
        'state.dudika_id' => 'dudika_id',
        'state.bekerja_bidang_bisnis' => 'bekerja_bidang_bisnis',
        'state.profession_id' => 'profession_id',
        'state.bond_id' => 'bond_id',
        'state.bekerja_penghasilan' => 'bekerja_penghasilan',
        'state.bekerja_gaji_standar_umr' => 'bekerja_gaji_standar_umr',

        'state.wirausaha_nama' => 'wirausaha_nama',
        'state.wirausaha_bidang_bisnis' => 'wirausaha_bidang_bisnis',
        'state.wirausaha_penghasilan' => 'wirausaha_penghasilan',

        'state.pernah_bekerja' => 'pernah_bekerja',
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

            'pernah_bekerja' => $this->state['pernah_bekerja'],

            'melanjutkan_linear' => $this->state['melanjutkan_linear'],
            'melanjutkan_tanggal_mulai' => $this->state['melanjutkan_tanggal_mulai'],
            'melanjutkan_kampus' => $this->state['melanjutkan_kampus'],
            'melanjutkan_prodi' => $this->state['melanjutkan_prodi'],

            'bekerja_linear' => $this->state['bekerja_linear'],
            'bekerja_tanggal_mulai' => $this->state['bekerja_tanggal_mulai'],
            'bekerja_sebelum_lulus' => $this->state['bekerja_sebelum_lulus'],
            'bekerja_masa_tunggu' => $this->state['bekerja_masa_tunggu'],
            'bekerja_melalui_bkk' => $this->state['bekerja_melalui_bkk'],
            'bekerja_nama' => $this->state['bekerja_nama'],
            'dudika_id' => $this->state['dudika_id'],
            'bekerja_bidang_bisnis' => $this->state['bekerja_bidang_bisnis'],
            'profession_id' => $this->state['profession_id'],
            'bond_id' => $this->state['bond_id'],
            'bekerja_penghasilan' => $this->state['bekerja_penghasilan'],
            'bekerja_gaji_standar_umr' => $this->state['bekerja_gaji_standar_umr'],

            'wirausaha_nama' => $this->state['wirausaha_nama'],
            'wirausaha_bidang_bisnis' => $this->state['wirausaha_bidang_bisnis'],
            'wirausaha_penghasilan' => $this->state['wirausaha_penghasilan'],
        ]);

        $this->emit('saved');
    }
    
    public function render()
    {
        return view('livewire.student.trace-student');
    }
}
