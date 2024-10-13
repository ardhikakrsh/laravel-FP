<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
            [
                'id' => 1, 
                'NIK' => '1234567890123456', 
                'nomor_telepon' => '081234567890', 
                'users_id' => 2
            ],
            [
                'id' => 2, 
                'NIK' => '6543210987654321', 
                'nomor_telepon' => '081935116638', 
                'users_id' => 3
            ],
            [
                'id' => 3, 
                'NIK' => '2837482937481928', 
                'nomor_telepon' => '082384728391', 
                'users_id' => 4
            ],
        ]);
    }    
}
