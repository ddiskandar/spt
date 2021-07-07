<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Profile;

use Illuminate\Support\Facades\Validator;


class ProfileStudent extends Component
{
    use WithFileUploads;

    public $profile;
    public $photo;
    
    public $state = [];

    protected $rules = [
        'photo' => 'nullable|image|max:2048',
        'state.testimoni' => 'required|string|max:512',
        'state.saran' => 'required|string|max:512',
        'state.address' => 'required|string|max:512',
    ];

    protected $validationAttributes = [
        'photo' => 'Photo',
        'state.testimoni' => 'testimoni',
        'state.saran' => 'saran',
        'state.address' => 'address',
    ];

    public function mount()
    {
        $this->profile = Profile::query()
            ->where('student_id', auth()->user()->student->id)
            ->first();
        
        $this->state = $this->profile->toArray();
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

    public function update()
    {
        $this->validate();

        $this->profile->update([
            'testimoni' => $this->state['testimoni'],
            'saran' => $this->state['saran'],
            'address' => $this->state['address'],
            'photo' => $this->photo
                ? $this->photo
                    ->storeAs(
                        'photos',
                        auth()->user()->student->nipd 
                        . '-' .
                        str_replace(' ', '', auth()->user()->student->name)
                        . '-' .
                        auth()->user()->student->uuid
                        . '.' . 
                        $this->photo->extension(),
                        'public'
                    )
                : $this->state['photo'] ?? NULL,
        ]);

        $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.student.profile-student');
    }
}
