<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Menu;
use App\Models\User;
use Livewire\Livewire;
use Illuminate\Support\Collection;
use App\Http\Livewire\Partials\MainNav;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;
    
    public function setup() : void
    {
        parent::setUp();
        Artisan::call('db:seed');
    }
    
    public function test_can_see_landing_page()
    {
        $response = $this->get(route('/'));

        $response->assertStatus(200);
    }

    public function test_can_see_dashboard()
    {        
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('dashboard.store.index'));
        
        $response->assertStatus(200);
    }

    function test_dashboard_contains_main_nav_component()
    {
        $user = User::factory()->create();
        
        $this->actingAs($user)->get(route('dashboard.store.index'))->assertSeeLivewire('partials.main-nav');
    }

    function test_assert_main_nav_contains_menus_list()
    {
        $globalMenus = Menu::where('is_admin', '!=', 1)
                                ->orWhereNull('is_admin')
                                ->get();
        
        Livewire::test(MainNav::class)->assertSet('globalMenus', $globalMenus);

        $adminMenus = Menu::where(['is_admin' => 1])->get();

        Livewire::test(MainNav::class)->assertSet('adminMenus', $adminMenus);
    }

    function test_assert_user_cant_see_adm_menu()
    {
        $user = User::factory()->create();
        $html = 'Administração';

        Livewire::actingAs($user)->test(MainNav::class)->assertDontSeeHtml($html);
    }

    function test_assert_admin_can_see_adm_menu()
    {
        $user = $user = User::factory()->create([
            'is_admin' => 1
        ]);

        $html = 'Administração';

        Livewire::actingAs($user)->test(MainNav::class)->assertSeeHtml($html);
    }

    function test_assert_dashboard_contains_graph_component()
    {
        $user = User::factory()->create();
        
        $this->actingAs($user)->get(route('dashboard.store.index'))->assertSeeLivewire('partials.dash-graph');
    }

    function test_assert_dashboard_contains_card_status_component()
    {
        $user = User::factory()->create();
        
        $this->actingAs($user)->get(route('dashboard.store.index'))->assertSeeLivewire('partials.card-status');
    }
}
