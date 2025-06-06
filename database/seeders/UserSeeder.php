<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Teja',
            'email' => 'teja@gmail.com',
            'password' => Hash::make('teja123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Jerry',
            'email' => 'jerry@gmail.com',
            'password' => Hash::make('jerry123'),
            'role' => 'user',
        ]);

    }
}
