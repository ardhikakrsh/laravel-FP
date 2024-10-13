<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $fillable = [
        'tanggal_pembelian', 
        'total_harga', 
        'barang_id', 
        'users_id'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'pembelian_id');
    }
}
