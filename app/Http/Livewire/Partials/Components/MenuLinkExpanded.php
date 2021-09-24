<?php

namespace App\Http\Livewire\Partials\Components;

use Livewire\Component;

class MenuLinkExpanded extends Component
{
    public $menu;

    public function render()
    {   
        return view('livewire.partials.components.menu-link-expanded');
    }
}
