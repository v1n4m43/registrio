<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'Birth Employee',
                'email' => 'birth_employee@example.com',
                'password' => Hash::make('birth'),
                'role' => 'birth_employee',
            ],
            [
                'name' => 'Marriage Employee',
                'email' => 'marriage_employee@example.com',
                'password' => Hash::make('marriage'),
                'role' => 'marriage_employee',
            ],
            [
                'name' => 'Death Employee',
                'email' => 'death_employee@example.com',
                'password' => Hash::make('death'),
                'role' => 'death_employee',
            ],
        ]);
    }
}
