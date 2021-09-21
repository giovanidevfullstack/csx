<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class MainNav extends Component
{   
    /**
     * * - extract to a table with seeders
     * * - Here we get menus e build them accordingly with user role and plan active
     * * -- menus will depend by plan [month, bianual, year] 
     * * - Listen for notification event and update de icon value
     */
    public $menus = [
        [
            'title' => 'Loja',
            'links' => [
                [
                    'name' => 'Panel',
                    'icon' => 'fa-home',
                    'route' => 'panel.store.index'
                ],
                [
                    'name' => 'Cars',
                    'icon' => 'fa-car',
                    'route' => 'panel.store.vehicles.index'
                ],
                [
                    'name' => 'Financial',
                    'icon' => 'fa-money-bill-wave',
                    'route' => null,
                    'new_msg' => 5 
                ],
                [
                    'name' => 'Calendar',
                    'icon' => 'fa-calendar',
                    'route' => null
                ],
                [
                    'name' => 'Deals',
                    'icon' => 'fa-hands-helping',
                    'route' => null,
                    'new_msg' => 3 
                ]
            ]
        ],
        [
            'title' => 'Administração',
            'links' => [
                [
                    'name' => 'Log',
                    'icon' => 'fa-server',
                    'route' => null, 
                ],
                [
                    'name' => 'Usuários',
                    'icon' => 'fa-user-lock',
                    'route' => null,
                ],
                [
                    'name' => 'Segurança',
                    'icon' => 'fa-shield-alt',
                    'route' => null,
                    'new_msg' => 10 
                ]
            ]
        ]
    ];

    public $isOpen = true;

    public function render()
    {
        return view('livewire.partials.main-nav');
    }
}
