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

    /**
     * Can see landing page
     *
     * @test
     */
    public function can_see_landing_page()
    {
        $response = $this->get(route('/'));

        $response->assertStatus(200);
    }

    /**
     * Can see dashboard
     *
     * @test
     */
    public function can_see_dashboard()
    {        
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('dashboard.store.index'));
        
        $response->assertStatus(200);
    }

    /** 
     * Main Nav is present
     * 
     * @test 
     *  */
    function dashboard_contains_main_nav_component()
    {
        $user = User::factory()->create();
        
        $this->actingAs($user)->get(route('dashboard.store.index'))->assertSeeLivewire('partials.main-nav');
    }

    /** 
     * Main Nav contains menus list
     * 
     * @test 
     *  */
    function assert_main_nav_contains_menus_list()
    {
        $globalMenus = Menu::where('is_admin', '!=', 1)
                                ->orWhereNull('is_admin')
                                ->get();
        
        Livewire::test(MainNav::class)->assertSet('globalMenus', $globalMenus);

        $adminMenus = Menu::where(['is_admin' => 1])->get();

        Livewire::test(MainNav::class)->assertSet('adminMenus', $adminMenus);
    }

    /** 
     * User can't see adm menus
     * 
     * @test 
     *  */
    function assert_user_cant_see_adm_menu()
    {
        $user = User::factory()->create();
        $html = 'Administração';

        Livewire::actingAs($user)->test(MainNav::class)->assertDontSeeHtml($html);
    }

    /** 
     * Admin can see adm menus
     * 
     * @test 
     *  */
    function assert_admin_can_see_adm_menu()
    {
        $user = $user = User::factory()->create([
            'is_admin' => 1
        ]);

        $html = 'Administração';

        Livewire::actingAs($user)->test(MainNav::class)->assertSeeHtml($html);
    }
}
