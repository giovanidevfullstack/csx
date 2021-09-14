<?php

namespace Database\Factories;

use App\Models\VehicleDocument;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleDocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VehicleDocument::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'number' => $this->faker->randomNumber(8)
        ];
    }
}
