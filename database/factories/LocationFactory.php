<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->streetName(),
            'lat' => $this->faker->latitude(),
            'lng' => $this->faker->longitude(),
            'allowed' => $this->faker->boolean(),
            'user_id' => 1,
        ];
    }
}
