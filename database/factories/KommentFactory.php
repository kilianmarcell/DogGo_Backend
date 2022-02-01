<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'szoveg' => $this->faker->text(),
        ];
    }
}
