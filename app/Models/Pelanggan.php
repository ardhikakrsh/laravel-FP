<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = [
        'NIK', 
        'nomor_telepon', 
        'users_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, users_id);
    }
}
