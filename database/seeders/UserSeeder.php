<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(15)->create();

        \App\Models\User::factory()->create([
            'username' => 'superadmin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make("admin"),
            'permission' => 3,
        ]);

        \App\Models\User::factory()->create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make("admin"),
            'permission' => 2,
        ]);

        \App\Models\User::factory()->create([
            'username' => 'test_user_1',
            'email' => 'test_user_1@example.com',
            'password' => Hash::make("test"),
            'permission' => 0,
        ]);

        \App\Models\User::factory()->create([
            'username' => 'test_user_2',
            'email' => 'test_user_2@example.com',
            'password' => Hash::make("test"),
            'permission' => 0,
        ]);

        \App\Models\User::factory()->create([
            'username' => 'test_user_banned',
            'email' => 'test_user_banned@example.com',
            'password' => Hash::make("test"),
            'permission' => 1,
        ]);
    }
}
