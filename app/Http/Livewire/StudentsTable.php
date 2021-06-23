<?php

namespace App\Http\Livewire;

use App\Models\Student;
use App\Models\Year;
use Livewire\WithPagination;
use Livewire\Component;

class StudentsTable extends Component
{
    use WithPagination;

    public $search = '';

    public $perPage = 4;

    public $filterAngkatan;
    public $filterJurusan;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
        'filterAngkatan' => ['except' => ''],
        'filterJurusan' => ['except' => ''],
    ];


    public function render()
    {
        return view('livewire.students-table', [
            'students' => Student::query()
                ->Where('name', 'like', '%' . $this->search. '%')
                ->Where('year_id', 'like', '%' . $this->filterAngkatan. '%')
                ->Where('major_id', 'like', '%' . $this->filterJurusan. '%')
                ->with(['angkatan', 'jurusan'])
                ->simplePaginate($this->perPage),
        ]);
    }
}
