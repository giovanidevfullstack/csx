<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class CardStatus extends Component
{
    public $data = [];

    public function render()
    {
        return view('livewire.partials.card-status');
    }
}
