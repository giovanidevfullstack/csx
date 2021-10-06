<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;
use App\Models\Menu;
use App\Models\User;
use Livewire\Livewire;
use Illuminate\Support\Facades\Artisan;
use App\Http\Livewire\Admin\Menus\MenuCrud;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MenuManagementTest extends TestCase
{
    use RefreshDatabase;
    
    public function setup() : void
    {
        parent::setUp();
        Artisan::call('db:seed');
    }

    function test_assert_admin_menu_contains_list_menu_component()
    {
        $admin = User::factory()->create([
            'is_admin' => 1
        ]);
        
        $this->actingAs($admin)->get(route('dashboard.admin.menus.index'))->assertSeeLivewire('admin.menus.menu-list');
    }

    function test_assert_admin_menu_contains_menu_config_component()
    {
        $admin = User::factory()->create([
            'is_admin' => 1
        ]);
        
        $this->actingAs($admin)->get(route('dashboard.admin.menus.index'))->assertSeeLivewire('admin.menus.menu-config');
    }

    function test_assert_admin_can_update_menu()
    {
        $admin = User::factory()->create([
            'is_admin' => 1
        ]);

        $menu = Menu::find(1)->first();

        $menu->icon = 'fa-pencil';
        
        Livewire::actingAs($admin)
            ->test(MenuCrud::class)
            ->set('menu', $menu->toArray())
            ->call('save')
            ->assertStatus(200);
    }

    function test_assert_admin_cant_update_menu()
    {
        $admin = User::factory()->create([
            'is_admin' => 1
        ]);

        $menu = Menu::find(1)->first();

        $menu->icon = '';
        
        Livewire::actingAs($admin)
            ->test(MenuCrud::class)
            ->set('menu', $menu->toArray())
            ->call('save')
            ->assertHasErrors(['menu.icon']);
    }
}
