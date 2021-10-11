<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

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
        $this->globalMenus = $this->getGlobalMenus();

        if (Gate::allows('only-admin')) {
            $this->adminMenus = $this->getAdminMenus();
        }

        return view('livewire.dashboard.main-nav');
    }

    private function getGlobalMenus()
    {
        return Menu::active()
            ->user()
            ->orderBy('id', 'asc')
            ->orderBy('created_at', 'asc')
            ->get();
    }

    private function getAdminMenus()
    {
        return Menu::active()
            ->admin()
            ->orderBy('id')
            ->orderBy('created_at', 'asc')
            ->get();
    }
}
