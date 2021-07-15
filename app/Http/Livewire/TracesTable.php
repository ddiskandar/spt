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
    public $published;
    public $join_wa;

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
        'filterAngkatan' => ['except' => ''],
        'filterJurusan' => ['except' => ''],
        'filterAktivitas' => ['except' => ''],
        'filterPublikasi' => ['except' => ''],
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
        $this->published = $this->traceDetail->student->profile->published;
        $this->join_wa = $this->traceDetail->student->profile->join_wa;
    }

    public function updatedPublished()
    {
        $this->traceDetail->student->profile->update([
            'published' => $this->published,
        ]);
    }

    public function updatedJoinWa()
    {
        $this->traceDetail->student->profile->update([
            'join_wa' => $this->join_wa,
        ]);
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
                    $query->where('major', 'like', '%' . $this->filterJurusan); 
                    $query->where('year_id', 'like', '%' . $this->filterAngkatan); 
                    $query->whereHas('profile', function($query) {
                        $query->where('published','like', '%' . $this->filterPublikasi);
                    });
                })
                ->whereHas('activity', function ($query) {
                    $query->where('activity_id', 'like', '%' . $this->filterAktivitas);
                })
                ->latest('updated_at')
                ->paginate($this->perPage),
        ]);
    }
}
