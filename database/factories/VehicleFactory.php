<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_name' => $this->faker->name,
            'model' => $this->faker->word,
            'price' => $this->faker->randomNumber(rand(3, 6)), 
            'factory' => $this->faker->company,
            'year' => $this->faker->date('Y-m-d'),
            'details' => null,
            'is_new' => rand(0,1),
            'has_financing' => rand(0,1),
            'is_sold' => rand(0,1),
            'is_visible' => rand(0,1),
            'is_annual_tax_paid' => rand(0,1),
            'has_crash' => rand(0,1),
            'doc_number' => $this->faker->randomNumber(),
            'doc_type' => $this->faker->word,
            'doc_type' => $this->faker->date,
        ];
    }
}
