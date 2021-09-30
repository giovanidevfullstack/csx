<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class DashGraph extends Component
{
    // todo
    // um dataset pra cada item que for colocar no gráfico
    public $salles = [2, 19, 3, 5, 2, 13];
    public $deals = [22, 9, 3, 15, 12, 3];
    public $labels = ['April', 'March', 'May', 'Jun', 'Jul', 'Aug'];

    //? test
    public $title = "Teste";

    public function render()
    {
        return view('livewire.partials.dash-graph');
    }
}
