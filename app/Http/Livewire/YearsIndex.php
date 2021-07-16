<?php

namespace App\Http\Livewire;

use App\Models\Year;
use Livewire\Component;
use Livewire\WithPagination;

class YearsIndex extends Component
{
    use WithPagination;

    public $search;
    public $perPage = 7;

    public $yearId;
    public $name;
    public $wa_group;

    protected $rules = [
        'yearId' => 'required',
        'name' => 'required',
        'wa_group' => 'required',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function submitForm()
    {
        $this->validate();

        Year::updateOrCreate(
            [
                'id' => $this->yearId,
            ],
            [
                'name' => $this->name,
                'wa_group' => $this->wa_group,
            ]
        );

        $this->resetForm();

    }

    public function resetForm()
    {
        $this->yearId = '';
        $this->name = '';
        $this->wa_group = '';
    }

    public function edit($id)
    {
        $year = Year::find($id);

        $this->yearId = $year->id;
        $this->name= $year->name;
        $this->wa_group= $year->wa_group;
    }

    public function render()
    {
        return view('livewire.years-index', [
            'years' => Year::paginate()
        ]);
    }
}
