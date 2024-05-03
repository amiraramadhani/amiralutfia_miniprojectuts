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
                'kode_satuan' => 'PCS',
                'nama_satuan' => 'Pieses'
            ],
            [
                'kode_satuan' => 'BOX',
                'nama_satuan' => 'Boks'
            ],
            [
                'kode_satuan' => 'LSN',
                'nama_satuan' => 'Lusin'
            ],
        ]);
    }
}
