<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Profile;
use App\Models\Trace;
use Livewire\WithPagination;

class TracesTable extends Component
{
    use WithPagination;

    public $panel = false;

    public $search = '';

    public $traceDetail;

    public $perPage = 10;
    public $filterAngkatan;
    public $filterJurusan;
    public $filterAktivitas;
    public $filterPublikasi;

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

    public function traceDetail(Trace $trace)
    {
        $this->panel = true;
        $this->traceDetail = $trace;
    }

    public function render()
    {
        return view('livewire.traces-table', [
            'traces' => Trace::query()
                ->select(
                    'id',
                    'student_id',
                    'activity_id',
                )
                ->with(
                    'student', 
                    'student.user:id,name,profile_photo_path', 
                    'student.profile', 
                    'student.jurusan', 
                    'student.angkatan',
                    'activity:id,name', 
                )
                ->whereHas('student', function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%'); 
                })
                ->whereHas('activity', function ($query) {
                    $query->where('activity_id', 'like', '%' . $this->filterAktivitas . '%');
                })
                ->latest('updated_at')
                ->paginate($this->perPage),
        ]);
    }
}
