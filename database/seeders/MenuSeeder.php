<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    // protected $icons = [
    //     'fa-home',
    //     'fa-car',
    //     'fa-money-bill-wave',
    //     'fa-calendar',
    //     'fa-hands-helping',
    //     'fa-server',
    //     'fa-user-lock',
    //     'fa-shield-alt'
    // ];

    public $menus = [
        [
            'title' => 'Loja',
            'links' => [
                [
                    'name' => 'Dashboard',
                    'icon' => 'fa-tachometer-alt',
                    'route' => 'dashboard.store.index',
                    'is_active' => 1
                ],
                [
                    'name' => 'Cars',
                    'icon' => 'fa-car',
                    'route' => 'dashboard.vehicles.index',
                    'is_active' => 1
                ],
                [
                    'name' => 'Financial',
                    'icon' => 'fa-money-bill-wave',
                    'route' => null,
                    'new_msg' => 5 ,
                    'is_active' => 1
                ],
                [
                    'name' => 'Calendar',
                    'icon' => 'fa-calendar',
                    'route' => null,
                    'is_active' => 1
                ],
                [
                    'name' => 'Deals',
                    'icon' => 'fa-hands-helping',
                    'route' => null,
                    'new_msg' => 3 ,
                    'is_active' => 1
                ]
            ]
        ],
        [
            'title' => 'Administração',
            'links' => [
                [
                    'name' => 'Menus',
                    'icon' => 'fa-bars',
                    'route' => 'dashboard.admin.menus.index', 
                    'is_admin' => 1,
                    'is_active' => 1
                ],
                [
                    'name' => 'Log',
                    'icon' => 'fa-server',
                    'route' => null, 
                    'is_admin' => 1,
                    'is_active' => 1
                ],
                [
                    'name' => 'Usuários',
                    'icon' => 'fa-user-lock',
                    'route' => null,
                    'is_admin' => 1,
                    'is_active' => 1
                ],
                [
                    'name' => 'Segurança',
                    'icon' => 'fa-shield-alt',
                    'route' => null,
                    'new_msg' => 10, 
                    'is_admin' => 1,
                    'is_active' => 1
                ]
            ]
        ]
    ];    

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->menus as $k => $menu){
            $title = $menu['title'];
            
            foreach($menu['links'] as $j => $link){
                Menu::create([
                    'title' => $title,
                    'name' => $link['name'],
                    'icon' => $link['icon'],
                    'route' => $link['route'],
                    'new_msgs' => rand(0,5),
                    'is_admin' => $link['is_admin'] ?? null,
                    'is_active' => $link['is_active']
                ]);
            };
        }
    }
}
