<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class gamesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(2),
            'price' => $this->faker->numberBetween($min = 25, $max = 500),
            'description' => $this->faker->sentence(5),
            'quantity' => $this->faker->numberBetween($min = 5, $max = 100)
        ];
    }
}
