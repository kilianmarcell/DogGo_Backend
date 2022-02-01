<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ErtekelesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ertek' => $this->faker->numberBetween(1, 5),
            'komment' => $this->faker->text(),
        ];
    }
}
