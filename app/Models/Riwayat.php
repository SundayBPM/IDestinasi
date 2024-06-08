<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $fillable = ['id_pembelian', 'id_saran'];

    public function Wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
