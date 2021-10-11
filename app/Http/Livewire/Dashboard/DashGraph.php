<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class DashGraph extends Component
{
    // todo
    // um dataset pra cada item que for colocar no gráfico
    public $salles = [2, 19, 3, 5, 2, 13];
    public $deals = [22, 9, 3, 15, 12, 3];
    public $labels = ['April', 'March', 'May', 'Jun', 'Jul', 'Aug'];

    //? test
    public $datasets = [
        [
            'label' => 'Salles',
            'data' => [21, 59, 33, 56, 12, 143],
            'backgroundColor' => [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            'borderColor' => [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            'borderWidth' => 1

        ],
        [
            'label' => 'Deals',
            'data' => [5, -19, 32, 15, 72, 113],
            'backgroundColor' => [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            'borderColor' => [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            'borderWidth' => 1

        ]
    ];

    public function render()
    {
        return view('livewire.dashboard.dash-graph');
    }
}
