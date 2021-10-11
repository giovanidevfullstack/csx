<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class CardStatus extends Component
{
    public $card = [];

    public function render()
    {   
        return view('livewire.dashboard.card-status');
    }
}
