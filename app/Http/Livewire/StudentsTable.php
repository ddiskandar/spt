<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\WithPagination;
use Livewire\Component;

class StudentsTable extends Component
{
    use WithPagination;

    public $panel = false;
    public $studentDetail;

    public $search = '';

    public $perPage = 9;

    public $filterAngkatan;
    public $filterJurusan;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
        'filterAngkatan' => ['except' => ''],
        'filterJurusan' => ['except' => ''],
    ];

    public function studentDetail(Student $student)
    {
        $this->panel = true;
        $this->studentDetail = $student;
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.students-table', [
            'students' => Student::query()
                ->Where('name', 'like', '%' . $this->search. '%')
                ->Where('year_id', 'like', '%' . $this->filterAngkatan)
                ->Where('major', 'like', '%' . $this->filterJurusan)
                ->with(['angkatan', 'jurusan'])
                ->paginate($this->perPage),
        ]);
    }
}
