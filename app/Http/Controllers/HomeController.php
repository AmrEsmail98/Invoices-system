<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $chartjs2 = app()->chartjs
        ->name('barChartTest')
        ->type('bar')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['Label x', 'Label y'])
        ->datasets([
            [
                "label" => "My First dataset",
                'backgroundColor' => ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                'data' => [69, 59]
            ],
            [
                "label" => "My First dataset",
                'backgroundColor' => ['rgba(255, 99, 132, 0.3)', 'rgba(54, 162, 235, 0.3)'],
                'data' => [65, 12]
            ]
        ])
        ->options([]);

    $chartjs = app()->chartjs
    ->name('pieChartTest')
    ->type('pie')
    ->size(['width' => 400, 'height' => 200])
    ->labels(['Label x', 'Label y'])
    ->datasets([
        [
            'backgroundColor' => ['#FF6384', '#36A2EB'],
            'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
            'data' => [69, 59]
        ]
    ])
    ->options([]);

return view('home', compact('chartjs','chartjs2'));


    }
}
