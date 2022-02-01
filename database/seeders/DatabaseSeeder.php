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
        \App\Models\Felhasznalo::factory(15)->create();
        \App\Models\Komment::factory(15)->create();
        \App\Models\Hely::factory(15)->create();
        \App\Models\Ertekeles::factory(15)->create();
    }
}
