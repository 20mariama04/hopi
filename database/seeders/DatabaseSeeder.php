<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
require_once __DIR__.'/UsersTableSeeder.php';

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    }
}