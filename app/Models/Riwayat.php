<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $fillable = ['id_pembelian', 'id_saran'];

    public function Objek_Wisata()
    {
        return $this->belongsTo(Objek_Wisata::class);
    }
}
