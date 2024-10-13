<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Enums\RolesType;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1, 
                'nama' => 'Admin', 
                'email' => 'admin@solecity.com', 
                'password' => hash::make('admin123'), 
                'role' => RolesType::admin,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2, 
                'nama' => 'Ardhika Krishna', 
                'email' => 'dhika@solecity.com', 
                'password' => hash::make('dhika123'), 
                'role' => RolesType::user,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3, 
                'nama' => 'Cavel Ferrari', 
                'email' => 'cavel@solecity.com', 
                'password' => hash::make('cavel123'), 
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4, 
                'nama' => 'Fadhil Hanif', 
                'email' => 'fadhil@solecity.com', 
                'password' => hash::make('fadhil123'), 
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    } 
}
