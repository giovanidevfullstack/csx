<?php

namespace App\Http\Livewire\Admin\Menus;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Http\Request;

class MenuList extends Component
{
    protected $listeners = [
        'menuUpdated' => '$refresh',
        'menuDeleted' => '$refresh'
    ];

    public $allMenus = [];

    public $menuName;

    protected $rules = [
        'menuName' => 'required|min:3',
    ];

    public function openMenu(Menu $menu)
    {
        $this->emit('menuSelected', $menu->id);
    }
    
    public function save()
    {
        $this->validate();

        if(Menu::create(['name' => $this->menuName])){
            $this->emit('menuCreated');
        }
    }

    public function render()
    {
        $this->allMenus = Menu::all();
        return view('livewire.admin.menus.menu-list');
    }
}
