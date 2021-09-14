<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'country' => $this->faker->country,
            'uf' => $this->faker->stateAbbr,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'postcode' => $this->faker->postcode,
            'street_name' => $this->faker->streetName,
            'street_number' => $this->faker->buildingNumber,
            'note' => $this->faker->sentence
        ];
    }
}
