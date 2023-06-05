<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'code' => 'kg',
                'name' => 'kilo gram',
                'description' => 'sepuluh kilo gram'
            ],
            [
                'code' => 'cm',
                'name' => 'centi meter',
                'description' => 'satu centi meter'
            ],
            [
                'code' => 'Un',
                'name' => 'Unit',
                'description' => 'Satu Unit '
            ],
        ]);
    }
}
