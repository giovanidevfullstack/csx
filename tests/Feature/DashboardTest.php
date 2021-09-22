<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Menu;
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
        $response = $this->get(route('dashboard.store.index'));
        
        $response->assertStatus(200);
    }

    /**
     * Can see dashboard vehicles
     *
     * @test
     */
    public function can_see_dashboard_vehicles()
    {
        $response = $this->get(route('dashboard.store.vehicles.index'));

        $response->assertStatus(200);
    }

    /** 
     * Main Nav is present
     * @test 
     *  */
    function dashboard_contains_main_nav_component()
    {
        $this->get(route('dashboard.store.index'))->assertSeeLivewire('partials.main-nav');
    }

    /** 
     * Main Nav contains menus list
     * @test 
     *  */
    function assert_main_nav_contains_menus_list()
    {
        $menus = Menu::all()->groupBy('title')->toBase();
        Livewire::test(MainNav::class)->assertSet('menus', $menus);
    }
}
