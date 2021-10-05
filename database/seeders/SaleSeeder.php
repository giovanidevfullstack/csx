<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;
use Faker\Generator as Faker;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::factory()->count(env('SEEDER_LIMIT', 10))->create([
            'vehicle_id' => (new Faker)->numberBetween(1, env('SEEDER_LIMIT', 10)),
        ]);
    }
}
