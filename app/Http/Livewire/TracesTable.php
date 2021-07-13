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
                ->with('student')
                ->latest('updated_at')
                ->paginate($this->perPage),
        ]);
    }
}
