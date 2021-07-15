<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Year;
use App\Models\Trace;
use App\Models\Major;
use App\Models\Profile;
use App\Models\Profession;

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
        return $this->belongsTo(Major::class, 'major', 'slug');
    }

    public function trace()
    {
        return $this->hasOne(Trace::class, 'student_id');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
