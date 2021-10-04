<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\{
    User,
    Vehicle,
    VehicleDocument,
    Type,
    Store,
    Address
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
        $this->createAdminUser(); 

        if (config('app.env') === 'local' || config('app.env') === 'testing'){
            $this->setupInitialData(env('SEEDER_LIMIT', 10));
        }    
    }

    private function createAdminUser()
    {
        User::create([
            'name' => 'Giovani',
            'last_name' => 'Souza',
            'email' => 'admin@csx.com',
            'password' => Hash::make('***csx***'),
            'email_verified_at' => now(),
            'is_admin' => 1,
            'gender' => 'm',
            'age' => 31
        ]);
    }

    private function setupInitialData(int $limit)
    {
        $types = Type::factory()->count(3)->create();

        User::factory()->count($limit)->create()->each(function ($user) use ($types) {
            $store = Store::factory()->count(1)->create()->each(function($store) use ($types) {
                $store->address()->save(Address::factory()->create());
                
                Vehicle::factory()->count(rand(1,10))->create([
                    'store_id' => $store->id,
                    'type_id' => $types[array_rand($types->pluck('id')->toArray(), 1)]->id
                ]);
            });

            $user->address()->save(Address::factory()->create());
        });      
    }
}
