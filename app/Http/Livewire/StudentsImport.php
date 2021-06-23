<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Imports\StudentImport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\WithFileUploads;

class StudentsImport extends Component
{
    use WithFileUploads;

    public $studentImport = false;

    public $errorMessages = '';

    public $file;

    public function import()
    {
        $this->studentImport = true;
    }

    public function store()
    {

        if ($this->file) {
            
            $file = $this->file->store('imports');
            try {
                Excel::import(new StudentImport, $file);

                return redirect('/students');
            } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {

                $failures = $e->failures();
                // foreach ($failures as $failure) {
                //     $failure->row(); // row that went wrong
                //     $failure->attribute(); // either heading key (if using heading row concern) or column index
                //     $failure->errors(); // Actual error messages from Laravel validator
                //     $failure->values(); // The values of the row that has failed.
                // }

                $this->errorMessages = 'Ada kesalahan pengisian data baris ke ' . $failures[0]->row() . ', harap periksa kembali!';
            }

            // TODO : delete file after upload
        }
    }

    public function render()
    {
        return view('livewire.students-import');
    }
}
