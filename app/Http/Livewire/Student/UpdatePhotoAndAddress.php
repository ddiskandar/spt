<?php

namespace App\Http\Livewire\Student;

use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class UpdatePhotoAndAddress extends Component
{
    use WithFileUploads;

    public $profile;

    public $photo;
    public $address;

    protected $rules = [
        'photo' => 'nullable|image|max:1024',
        'address' => 'required|string|max:512',
    ];

    protected $validationAttributes = [
        'photo' => 'photo',
        'address' => 'alamat',
    ];

    public function getProfileAttribute()
    {
        return $this->profile;
    }

    public function getUserProperty()
    {
        return Auth::user();
    }

    public function mount()
    {
        $this->profile = Profile::query()
            ->where('student_id', auth()->user()->student->id)
            ->first();

        $this->address = $this->profile->address;
    }

    public function updatedPhoto($value)
    {
        $validator = Validator::make(
            ['photo' => $this->photo],
            ['photo' => $this->rules['photo']],
        );

        if ($validator->fails()) {
            $this->reset('photo');
            $this->setErrorBag($validator->getMessageBag());
        }
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function deletePhoto()
    {
        $this->profile->update([
            'photo' => NULL,
        ]);
    }

    public function update()
    {
        $this->validate();

        $this->profile->update([
            'address' => $this->address,
            'photo' => $this->photo
                ? $this->photo
                ->storeAs(
                    'photos',
                    auth()->user()->student->nipd
                        . '-' . str_replace(' ', '', auth()->user()->student->name)
                        . '-' . auth()->user()->student->uuid
                        . '.' . $this->photo->extension(),
                    'public'
                )
                : $this->profile->photo ?? NULL,
        ]);

        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.student.update-photo-and-address');
    }
}
