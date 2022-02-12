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
        $this->call(UserSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(RatingSeeder::class);
    }
}
