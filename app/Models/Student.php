<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Year;
use App\Models\Trace;

class Student extends Model
{
    protected $guarded = [];
    
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function angkatan()
    {
        return $this->belongsTo(Year::class, 'year_id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }

    public function trace()
    {
        return $this->belongsTo(Trace::class);
    }
}
