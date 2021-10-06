<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;
use App\Models\Menu;

class MainNav extends Component
{   
    // protected $listeners = [ 'menuUpdated' => 'render' ];
    
    public $globalMenus = [];

    public $adminMenus = [];

    public function render()
    {
        $this->globalMenus = Menu::where('is_admin', '!=', 1)
                                ->orWhereNull('is_admin')
                                ->orWhere('is_admin', false)
                                ->orderBy('id')
                                ->get();

        $this->adminMenus = Menu::where(['is_admin' => 1])
                                ->orderBy('id')
                                ->get();
        return view('livewire.partials.main-nav');
    }
}
