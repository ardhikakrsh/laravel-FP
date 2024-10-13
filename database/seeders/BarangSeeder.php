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
    public function run()
    {
        DB::table('barang')->insert([
            [
                'id' => 1, 
                'nama' => 'Dunk Low Grey Frog', 
                'foto' => 'dunklowgrey.png', 
                'ukuran' => 42, 
                'harga' => 1900000, 
                'deskripsi' => 'The Nike Dunk Low Grey Fog delivers a subtle two-tone colorway of the classic silhouette originally released in 1985 as a college hoops shoe. The all-leather upper is treated to a pristine white base with contrasting overlays in a light grey shade.'
            ],
            [
                'id' => 2, 
                'nama' => 'Dunk Low Valerian Blue', 
                'foto' => 'dunklowVB.png', 
                'ukuran' => 43, 
                'harga' => 2200000, 
                'deskripsi' => 'The Nike Dunk Low Valerian Blue arrives in a smooth white leather construction with deep Valerian Blue overlays and Swooshes. Hits of red on the woven tongue label and heel embroidery add a subtle contrast. At the base, a matching white and blue Air sole completes the design.'
            ],
            [
                'id' => 3, 
                'nama' => 'Dunk Low Georgetown', 
                'foto' => 'dunklowgeorge.png', 
                'ukuran' => 44, 
                'harga' => 3300000, 
                'deskripsi' => 'As with the original “Be True To Your School” capsule from decades past, the upcoming sneakers boast a two-tone arrangement across its smooth leather upper. Light grey sets the stage for the deep navy overlays that appear around the toe, along the tongue and across the heel.'
            ],
        ]);
    }    
}
