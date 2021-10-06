<?php

namespace App\Http\Livewire\Admin\Menus;

use App\Models\Menu;
use Livewire\Component;

class MenuList extends Component
{
    public $allMenus = [];

    public function openMenu(Menu $menu)
    {
        $this->emit('menuSelected', $menu->id);
    }
    
    public function render()
    {
        return view('livewire.admin.menus.menu-list');
    }
}
