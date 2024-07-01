<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parents = [
            ['id' => 1, 'name' => 'John', 'email' => 'john@gmail.com'],
            ['id' => 2, 'name' => 'Tom', 'email' => 'tom2@gmail.com'],
            ['id' => 3, 'name' => 'Joy', 'email' => 'bin@jon.com'],
            ['id' => 4, 'name' => 'Adam', 'email' => 'adam@yahoo.com'],
            ['id' => 5, 'name' => 'Dennis', 'email' => 'den@gmail.com'],
        ];

        // Insert the parents into the tbl_parent table
        DB::table('tbl_parent')->insert($parents);
    }
}
