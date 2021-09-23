<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;
use App\Models\Menu;

class MainNav extends Component
{   
    public $isOpen = true;

    public $globalMenus = [];

    public $adminMenus = [];

    public function render()
    {
        $this->globalMenus = Menu::where('is_admin', '!=', 1)
                                ->orWhereNull('is_admin')
                                ->get();
        $this->adminMenus = Menu::where(['is_admin' => 1])->get();
        return view('livewire.partials.main-nav');
    }
}
