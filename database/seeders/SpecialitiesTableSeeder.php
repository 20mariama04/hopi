<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('specialities')->insert([
            ['id' => 1, 'name' => 'Cardiologie', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Neurologie', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Pédiatrie', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Dermatologie', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Médecine Générale', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
