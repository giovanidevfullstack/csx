<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;
use App\Models\Menu;

class MainNav extends Component
{   
    protected $listeners = [ 
        'menuUpdated' => '$refresh', 
        'menuCreated' => '$refresh'
    ];
    
    public $globalMenus = [];

    public $adminMenus = [];

    public function render()
    {
        $this->globalMenus = Menu::active()
            ->user()
            ->orderBy('id', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();

        // dd($this->globalMenus);

        $this->adminMenus = Menu::active()
            ->admin()
            ->orderBy('id')
            ->orderBy('created_at', 'asc')
            ->get();

        // dd($this->adminMenus);

        return view('livewire.partials.main-nav');
    }
}
