<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Yordi',
            'email' => 'yvanberkum@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$OBWqHllUY6Dt8gaEMeuDhe0e4.0OChOYEr7GYutUkUgFosomxtx4.',
            'user_role' => 'admin',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
