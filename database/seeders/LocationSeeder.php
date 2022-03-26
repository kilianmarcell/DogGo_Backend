<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Location::factory(15)->create();

        \App\Models\Location::factory()->create([
            'name' => 'McDonald\'s - Keleti',
            'description' => 'Nagyon jó',
            'lat' => 47.5008947,
            'lng' => 19.0819858,
            'allowed' => false,
            'user_id' => 3,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'Burger King - Keleti',
            'description' => 'Nagyon jó',
            'lat' => 47.5008272,
            'lng' => 19.0817936,
            'allowed' => false,
            'user_id' => 3,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'KFC Budapest - Keleti',
            'description' => 'Nagyon jó',
            'lat' => 47.5014546,
            'lng' => 19.0831529,
            'allowed' => true,
            'user_id' => 4,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'Pesti Pipi - Keleti',
            'description' => 'Nagyon jó',
            'lat' => 47.5012856,
            'lng' => 19.0827999,
            'allowed' => true,
            'user_id' => 4,
        ]);

        \App\Models\Location::factory()->create([
            'name' => 'Kutya Egy Hely kávézó/bár/kutya napközi',
            'description' => 'Nagyon jó',
            'lat' => 47.5060349,
            'lng' => 19.07362,
            'allowed' => false,
            'user_id' => 5,
        ]);
    }
}
