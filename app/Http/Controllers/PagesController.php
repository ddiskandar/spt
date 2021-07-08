<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PagesController extends Controller
{
    public function dashboard()
    {
        $tamatan = [
            Year::find(2019)->students->count(),
            Year::find(2020)->students->count(),
            Year::find(2021)->students->count(),
            Year::find(2022)->students->count(),
            Year::find(2023)->students->count(),
        ];

        $chart = (new LarapexChart)->areaChart()
        ->addData('Jumlah Lulusan', $tamatan)
        ->setXAxis(['2019', '2020', '2021', '2022', '2023']);

        return view('dashboard', compact('chart'));
    }
}
