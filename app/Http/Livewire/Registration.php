<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Student;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class Registration extends Component
{
    public $hasStudentData = false;
    public $student;

    public $name = 'adriyansah';
    public $birth_date;
    public $year;
    public $email;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:64',
        'birth_date' => 'required|date',
        'year' => 'required',
        'email' => 'nullable',
        'password' => 'nullable|confirmed',
    ];

    public function validate_student()
    {
        $this->hasStudentData = true;
        $this->student = Student::query()
            ->where('name', $this->name)
            ->where('year_id', $this->year)
            ->where('birth_date', $this->birth_date)
            ->first();
    }

    public function store()
    {
        $this->validate();

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

            Auth::login($user);

            return redirect()->route('dashboard');

        });
    }

    public function render()
    {
        return view('livewire.registration');
    }
}
