<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use App\Models\User;
use App\Models\Student;
use App\Models\Trace;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class Registration extends Component
{
    public $errorMessage = '';
    public $student;
    public $user;

    public $name = '';
    public $birth_date;
    public $year;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:64',
        'birth_date' => 'required|date',
        'year' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed',
    ];

    protected $validationAttributes = [
        'name' => 'nama',
        'birth_date' => 'tanggal lahir',
        'year' => 'tahun lulus',
        'email' => 'email aktif',
        'password' => 'password',
    ];

    public function validate_student()
    {
        $this->validate([
            'name' => 'required|string|max:64',
            'birth_date' => 'required|date',
            'year' => 'required',
        ]);
        
        $this->student = Student::query()
            ->where('name', $this->name)
            ->where('year_id', $this->year)
            ->where('birth_date', $this->birth_date)
            ->first();
        
        if (isset($this->student->user_id)) 
        {
            $this->errorMessage = 'registered';
        }

        if (empty($this->student))
        {
            $this->errorMessage = 'invalid';
        }
    }

    public function store()
    {
        $this->validate();

        $this->validate_student();

        DB::transaction( function () {
            
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'remember_token' => Str::random(10),
                'role' => 'student',
            ]);

            $this->student->update([
                'user_id' => $user->id,
            ]);

            Profile::create([
                'student_id' => $this->student->id
            ]);

            Trace::create([
                'student_id' => $this->student->id
            ]);

            Auth::login($user);

            return redirect()->route('home');

        });
    }

    public function render()
    {
        return view('livewire.registration');
    }
}
