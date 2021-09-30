<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class DashGraph extends Component
{
    // todo
    public $data = [2, 19, 3, 5, 2, 13];
    public $labels = ['Black', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'];

    //? test
    public $title = "Teste";

    public function render()
    {
        return view('livewire.partials.dash-graph');
    }
}
