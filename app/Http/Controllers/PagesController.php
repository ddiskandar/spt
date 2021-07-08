<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PagesController extends Controller
{
    public function dashboard()
    {
        $chart = (new LarapexChart)->areaChart()
        ->addData('Jumlah Lulusan', [40, 93, 35, 42, 18, 82])
        ->setXAxis(['2009', '2010', '2011', '2012', '2013', '2014']);

        return view('dashboard', compact('chart'));
    }
}
