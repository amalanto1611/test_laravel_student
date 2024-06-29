<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_parent')->insert([
            ['name' => 'John', 'email' => 'john@gmail.com'],
            ['name' => 'Tom', 'email' => 'tom2@gmail.com'],
            ['name' => 'Joy', 'email' => 'bin@jon.com'],
            ['name' => 'Adam', 'email' => 'adam@yahoo.com'],
            ['name' => 'Dennis', 'email' => 'den@gmail.com'],
        ]);
    }
}
