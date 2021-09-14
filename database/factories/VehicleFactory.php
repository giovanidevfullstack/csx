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
            'model' => $this->faker->word,
            'price' => $this->faker->randomNumber(rand(3, 6)), 
            'assembler' => $this->faker->company,
            'year' => $this->faker->year,
            'setup' => null,
            'is_new' => rand(0,1),
            'has_financing' => rand(0,1),
        ];
    }
}
