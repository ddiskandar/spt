<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;
use Livewire\WithPagination;

class ProfilesTable extends Component
{
    use WithPagination;

    public $panelProfileDetail = false;

    public $search = '';

    public $profileDetail;

    public $perPage = 4;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function updatingPerPage()
    {
        $this->resetPage();
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function showProfileDetail(Profile $profile)
    {
        $this->panelProfileDetail = true;
        $this->profileDetail = $profile;
    }

    public function render()
    {
        return view('livewire.profiles-table', [
            'profiles' => Profile::query()
                ->with('student')
                ->latest('updated_at')
                ->paginate($this->perPage),
        ]);
    }
}
