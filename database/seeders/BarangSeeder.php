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
                'kode_barang' => '1111',
                'nama_barang' => 'Roti Coklat',
                'harga_barang'=> 15000,
                'deskripsi_barang' => 'Roti Coklat Medium',
                'satuan_barang_id' => 1
            ],
        ]);
    }
}
