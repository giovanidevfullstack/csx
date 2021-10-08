<?php

namespace App\Http\Livewire\Admin\Menus;

use App\Models\Menu;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class MenuCrud extends Component
{
    protected $listeners = [
        'editMenu' => 'selectedMenu',
        'menuSelected' => 'resetMenu',
        'menuDeleted' => 'resetMenu'
    ];

    public $menu;

    protected $rules = [
        'menu.name' => 'required|min:3',
        'menu.is_admin' => 'nullable',
        'menu.icon' => 'required|min:5|max:30',
        'menu.route' => 'nullable|min:1|max:30'
    ];

    public function selectedMenu(Menu $menu)
    {
        $this->menu = $menu->toArray();
    }

    public function update()
    {
        $this->validate();

        $this->menu['is_admin'] = (is_null($this->menu['is_admin'])) || (!($this->menu['is_admin'])) ? false : true;
        $this->menu['title'] = (is_null($this->menu['is_admin'])) || (!($this->menu['is_admin'])) ? 'Loja' : 'Administração';

        if(Menu::find($this->menu['id'])->update($this->menu)){
            $this->emit('menuUpdated');
        }
    }

    public function resetMenu()
    {
        if(!empty($this->menu)){
            $this->reset('menu');
        }
    }

    public function render()
    {
        return view('livewire.admin.menus.menu-crud');
    }
}
