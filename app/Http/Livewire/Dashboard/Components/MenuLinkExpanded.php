<?php

namespace App\Http\Livewire\Dashboard\Components;

use Livewire\Component;

class MenuLinkExpanded extends Component
{
    public $menu;

    public function render()
    {   
        return view('livewire.dashboard.components.menu-link-expanded');
    }
}
