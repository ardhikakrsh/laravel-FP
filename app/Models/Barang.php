<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    
    protected $fillable = [
        'nama', 
        'foto', 
        'ukuran', 
        'harga', 
        'deskripsi'
    ];

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

}
