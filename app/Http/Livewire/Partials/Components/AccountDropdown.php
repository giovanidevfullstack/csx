<?php

namespace App\Http\Livewire\Partials\Components;

use Livewire\Component;

class AccountDropdown extends Component
{
    public $isOpen = false; 
    
    public function render()
    {
        return view('livewire.partials.components.account-dropdown');
    }
}
