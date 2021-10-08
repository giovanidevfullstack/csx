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

    public function editMenu(Menu $menu)
    {
        $this->emit('editMenu', $menu);
    }

    public function removeMenu(Menu $menu)
    {
        $menu->delete();
        $this->emit('menuDeleted');
        $this->resetMenu();
    }

    public function resetMenu()
    {
        if(!empty($this->menu)){
            $this->reset('menu');
        }
    }
    
    public function render()
    {
        return view('livewire.admin.menus.menu-config');
    }
}
