<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HelyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nev' => $this->faker->streetName(),
            'lat' => $this->faker->latitude(),
            'lng' => $this->faker->longitude(),
        ];
    }
}
