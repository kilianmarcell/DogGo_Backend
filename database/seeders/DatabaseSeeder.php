<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(15)->create();
        \App\Models\Hely::factory(15)->create();
        \App\Models\Feedback::factory(15)->create();
        \App\Models\Location::factory(15)->create();
        \App\Models\Rating::factory(15)->create();
    }
}
