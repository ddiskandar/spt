<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Student;
use App\Models\Year;
use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $years = Year::pluck('id')->toArray();

        $students = \DB::table('students')->select('year_id', 'major')->get();

        $profiles = \DB::table('profiles')->select('published')->get();
        
        $tamatan = [
            $students->where('year_id', $years[0])->count(),
            $students->where('year_id', $years[1])->count(),
            $students->where('year_id', $years[2])->count(),
            $students->where('year_id', $years[3])->count(),
            $students->where('year_id', $years[4])->count(),
            $students->where('year_id', $years[5])->count(),
            $students->where('year_id', $years[6])->count(),
            $students->where('year_id', $years[7])->count(),
            $students->where('year_id', $years[8])->count(),
            $students->where('year_id', $years[9])->count(),
        ];

        $mm = [
            $students->where('year_id', $years[0])->where('major', 'MM')->count(),
            $students->where('year_id', $years[1])->where('major', 'MM')->count(),
            $students->where('year_id', $years[2])->where('major', 'MM')->count(),
            $students->where('year_id', $years[3])->where('major', 'MM')->count(),
            $students->where('year_id', $years[4])->where('major', 'MM')->count(),
            $students->where('year_id', $years[5])->where('major', 'MM')->count(),
            $students->where('year_id', $years[6])->where('major', 'MM')->count(),
            $students->where('year_id', $years[7])->where('major', 'MM')->count(),
            $students->where('year_id', $years[8])->where('major', 'MM')->count(),
            $students->where('year_id', $years[9])->where('major', 'MM')->count(),
        ];

        $bdp = [
            $students->where('year_id', $years[0])->where('major', 'PN')->count(),
            $students->where('year_id', $years[1])->where('major', 'PN')->count(),
            $students->where('year_id', $years[2])->where('major', 'PN')->count(),
            $students->where('year_id', $years[3])->where('major', 'PN')->count(),
            $students->where('year_id', $years[4])->where('major', 'PN')->count(),
            $students->where('year_id', $years[5])->where('major', 'PN')->count(),
            $students->where('year_id', $years[6])->where('major', 'PN')->count(),
            $students->where('year_id', $years[7])->where('major', 'BDP')->count(),
            $students->where('year_id', $years[8])->where('major', 'BDP')->count(),
            $students->where('year_id', $years[9])->where('major', 'BDP')->count(),
        ];

        $card = [
            'tamatan' => $students->count(),
            'profile' => $profiles->count(),
            'published' => $profiles->where('published', 1)->count(),
        ];

        $chart = (new LarapexChart)->areaChart()
        ->addData('Jumlah Lulusan', $tamatan)
        ->addData('Multimedia', $mm)
        ->addData('Bisnis Daring dan Pemasaran', $bdp)
        // ->setDataLabels(false)
        ->setXAxis($years);

        return view('dashboard', compact('chart', 'card'));
    }
}
