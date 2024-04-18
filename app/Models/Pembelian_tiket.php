<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian_tiket extends Model
{
    use HasFactory;
    protected $fillable = ['id_users',
                            'id_destinasi',
                            'jumlah_tiket',
                            'harga',
                            'jenis_pembayaran',
                            'kedatangan'];
}
