<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;

class VehiclesTest extends TestCase
{
    use RefreshDatabase;
    
    public function setup() : void
    {
        parent::setUp();
        Artisan::call('db:seed');
    }
    
    public function test_can_see_dashboard_vehicles()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('dashboard.vehicles.index'));

        $response->assertStatus(200);
    }
}
