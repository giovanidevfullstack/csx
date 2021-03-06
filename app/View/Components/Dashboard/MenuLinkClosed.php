<?php

namespace App\View\Components\Dashboard;

use App\Models\Menu;
use Illuminate\View\Component;

class MenuLinkClosed extends Component
{
    public $menu;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.menu-link-closed');
    }
}
