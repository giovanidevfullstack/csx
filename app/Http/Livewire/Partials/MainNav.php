<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;
use App\Models\Menu;

class MainNav extends Component
{   
    /**
     * * - extract to a table with seeders
     * * - Here we get menus e build them accordingly with user role and plan active
     * * -- menus will depend by plan [month, bianual, year] 
     * * - Listen for notification event and update de icon value
     */
    
    public $isOpen = true;

    public $menus = [];

    public function render()
    {
        $this->menus = Menu::all()->groupBy('title')->toBase();
        return view('livewire.partials.main-nav');
    }
}
