<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relations extends Model
{
    protected $table = 'relations';
    protected $fillable = [
        'produk_kode_barang',
        'pesanan_kode_buy',
        'pembayaran_kode_payment',
        'status',
        
    ];
}
