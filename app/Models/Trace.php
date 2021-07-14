<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Student;
use App\Models\Activity;
use App\Models\Profession;
use App\Models\Income;
use App\Models\Dudika;
use App\Models\Business;

class Trace extends Model
{
    // use HasFactory;

    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Profession::class, 'profession_id');
    }

    public function dudika()
    {
        return $this->belongsTo(Dudika::class);
    }

    public function bidang_bisnis_bekerja()
    {
        return $this->belongsTo(Business::class, 'bekerja_bidang_bisnis');
    }

    public function penghasilan_bekerja()
    {
        return $this->belongsTo(Income::class, 'bekerja_penghasilan');
    }
}
