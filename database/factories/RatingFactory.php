<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stars' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->realText(),
            'location_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
