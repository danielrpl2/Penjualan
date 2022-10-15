<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaksi',
        'tgl_transaksi',
        'id_user',
        'id_barang',
        'total_bayar',
        'bayar'
    ];
  
}
