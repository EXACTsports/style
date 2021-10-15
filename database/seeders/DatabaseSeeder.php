<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
            'name' => 'Sarah Sibert',
            'email' => 'info@sarahsibert.net',
            'password' => '$2y$10$XXmED0AwnwDfx/uFQCZoVep3lT7uccVNA39yEoCbwsYx5alx3qCB2', //password
        ]);
    }
}
