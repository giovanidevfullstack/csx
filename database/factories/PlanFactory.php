<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomNumber(rand(3, 5)),
            'init_at' => $this->faker->date('Y-m-d'),
            'end_at' => $this->faker->date('Y-m-d'),
            'is_auto_renew' => rand(0,1),
            'is_active' => rand(0,1),
        ];
    }
}
