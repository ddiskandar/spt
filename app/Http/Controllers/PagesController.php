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
            Year::find(2014)->students->count(),
            Year::find(2015)->students->count(),
            Year::find(2016)->students->count(),
            Year::find(2017)->students->count(),
            Year::find(2018)->students->count(),
            Year::find(2019)->students->count(),
            Year::find(2020)->students->count(),
            Year::find(2021)->students->count(),
        ];

        $chart = (new LarapexChart)->areaChart()
        ->addData('Jumlah Lulusan', $tamatan)
        ->setXAxis(['2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', ]);

        return view('dashboard', compact('chart'));
    }
}
