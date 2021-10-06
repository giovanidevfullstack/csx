<?php

namespace App\Http\Livewire\Admin\Menus;

use App\Models\Menu;
use Livewire\Component;

class MenuConfig extends Component
{
    protected $listeners = ['menuSelected' => 'selectedMenu'];

    public $menu;

    public function selectedMenu(Menu $menu)
    {
        $this->menu = $menu;
    }

    public function render()
    {
        return view('livewire.admin.menus.menu-config');
    }
}
