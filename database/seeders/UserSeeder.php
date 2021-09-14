<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Vehicle,
    VehicleDocument,
    Type,
    Store
};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = Type::factory()->count(3)->create();
        
        User::factory()->count(100)->create()->each(function ($user) use ($types) {
            Vehicle::factory()->count(rand(1,2))->create([
                'user_id' => $user->id,
                'type_id' => $types[array_rand($types->pluck('id')->toArray(), 1)]->id
            ])->each(function ($vehicle) {
                VehicleDocument::factory()->count(2)->create([
                    'vehicle_id' => $vehicle->id
                ]);
            });

            $store = Store::factory()->count(1)->create();
            $user->store()->associate($store->pluck('id')[0]);
            $user->save();
        });
    }
}
