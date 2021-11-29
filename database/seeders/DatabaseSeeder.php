<?php

namespace Database\Seeders;

use App\Models\Admin;
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
        Admin::create([
            'name' => 'Felix Singgih',
            'username' => 'felix',
            'email' => 'sutosomoaja@gmail.com',
            'password' => bcrypt('logika123')
        ]);
    }
}
