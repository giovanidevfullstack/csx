<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class MainNav extends Component
{   
    //for dev
    //** extract to a table with seeders */
    //** menus will depend by plan [month, bianual, year] */
    public $menus = [
        [
            'name' => 'home',
            'icon' => 'fa-home',
            'route' => 'panel.store.index'
        ],
        [
            'name' => 'cars',
            'icon' => 'fa-car',
            'route' => 'panel.store.vehicles.index'
        ],
        [
            'name' => 'fin',
            'icon' => 'fa-money-bill-wave',
            'route' => null,
            'new_msg' => 5 
        ],
        [
            'name' => 'calendar',
            'icon' => 'fa-calendar',
            'route' => null
        ],
        [
            'name' => 'deals',
            'icon' => 'fa-hands-helping',
            'route' => null,
            'new_msg' => 3 
        ]
    ];

    public function render()
    {
        return view('livewire.partials.main-nav');
    }
}
