<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Str;

class StudentImport implements ToCollection, WithHeadingRow, WithValidation
{
    use Importable;

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Student::updateOrCreate(
                [
                    'nipd' => $row['nipd'],
                ],
                [
                    'year_id' => $row['year'],
                    'major' => $row['major'],
                    'name' => $row['name'],
                    'birth_date' => $row['birth_date'],
                    'jk' => $row['jk'],
                    'uuid' => Str::uuid(),
                ]
            );
        }
    }

    public function rules(): array
    {
        return [
            'nipd' => 'required|max:10',
            'year' => 'required|exists:App\Models\Year,id',
            'major' => 'required|exists:App\Models\Major,slug',
            'name' => 'max:64',
            'jk' => 'required|in:L,P',
            'birth_date' => 'date'
        ];
    }

    public function customValidationMessages()
    {
        return [
            'year.exists' => 'Isian tahun angkatan yang tepat.',
        ];
    }
}
