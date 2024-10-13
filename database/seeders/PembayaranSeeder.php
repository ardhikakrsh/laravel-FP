<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pembayaran')->insert([
            [
                'id' => 1, 
                'metode_pembayaran' => 'QRIS', 
                'jumlah_pembayaran' => 1900000, 
                'bukti_pembayaran' => 'bukti_transfer_1.png', 
                'pembelian_id' => 1
            ],
            [
                'id' => 2, 
                'metode_pembayaran' => 'BCA', 
                'jumlah_pembayaran' => 2200000, 
                'bukti_pembayaran' => 'bukti_transfer_2.png', 
                'pembelian_id' => 2
            ],
            [
                'id' => 3, 
                'metode_pembayaran' => 'QRIS', 
                'jumlah_pembayaran' => 2200000, 
                'bukti_pembayaran' => 'bukti_transfer_3.png', 
                'pembelian_id' => 3
            ],
        ]);
    }
    
}
