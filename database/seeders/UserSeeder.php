<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('password'),
            'status' => 'admin'
        ]);

        User::create([
            'name' => 'Member',
            'email' => 'member@localhost',
            'password' => bcrypt('password'),
            'status' => 'member'
        ]);
    }
}
