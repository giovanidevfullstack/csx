<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Menu;

class MainNav extends Component
{   
    protected $listeners = [ 
        'menuUpdated' => '$refresh',
        'menuDeleted' => '$refresh'
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

        $this->adminMenus = Menu::active()
            ->admin()
            ->orderBy('id')
            ->orderBy('created_at', 'asc')
            ->get();

        return view('livewire.dashboard.main-nav');
    }
}
