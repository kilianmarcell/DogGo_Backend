<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FelhasznaloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'felhasznalonev' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(),
            'regisztracio_datum' => now(),
            'jogosultsag' => '1',
        ];
    }
}
