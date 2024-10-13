<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('review')->insert([
            ['id' => 1, 'pesan_review' => 'Sneakers sangat nyaman, desainnya keren!', 'users_id' => 2, 'barang_id' => 1],
            ['id' => 2, 'pesan_review' => 'Kualitas premium, worth it!', 'users_id' => 3, 'barang_id' => 2],
            ['id' => 3, 'pesan_review' => '100% original dan pengiriman cepat', 'users_id' => 2, 'barang_id' => 2],
        ]);
    }
    
}
