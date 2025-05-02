<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Insert users
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin User',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2, 
                'name' => 'Patient User',
                'role' => 'patient',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Hospital User',
                'role' => 'hospital',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Insert passwords
        DB::table('passwords')->insert([
            [
                'user_id' => 1,
                'role' => 'admin',
                'password' => Hash::make('1234')
            ],
            [
                'user_id' => 2,
                'role' => 'patient',
                'password' => Hash::make('5678')
            ],
            [
                'user_id' => 3,
                'role' => 'hospital',
                'password' => Hash::make('9012')
            ]
        ]);
    }
}