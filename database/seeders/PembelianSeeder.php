<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pembelian')->insert([
            ['id' => 1, 'tanggal_pembelian' => '2024-10-10', 'total_harga' => 1900000, 'barang_id' => 1, 'users_id' => 2],
            ['id' => 2, 'tanggal_pembelian' => '2024-10-11', 'total_harga' => 2200000, 'barang_id' => 2, 'users_id' => 3],
            ['id' => 3, 'tanggal_pembelian' => '2024-10-11', 'total_harga' => 2200000, 'barang_id' => 2, 'users_id' => 2],
        ]);
    }    
}
