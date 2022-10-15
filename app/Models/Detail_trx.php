<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_trx extends Model
{
    use HasFactory;
      protected $fillable = [
        'id_dit',
        'id_transaksi',
        'id_barang',
        'jml',
        'total'
    ];
}
