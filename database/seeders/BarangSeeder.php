<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'namabarang' => 'sepatu',
                'deskripsibarang' => 'adidas',
                'kodebarang'=> 'S1',
                'hargabarang' => 19736709,
                'satuan_id' => 1
            ],
            [
                'namabarang' => 'tas',
                'deskripsibarang' => 'polo',
                'kodebarang'=> 'T1',
                'hargabarang' => 789379,
                'satuan_id' => 2
            ],
            [
                'namabarang' => 'ransel',
                'deskripsibarang' => 'stars',
                'kodebarang'=> 'R1',
                'hargabarang' => 6387389,
                'satuan_id' => 3
            ],
        ]);
    }
}
