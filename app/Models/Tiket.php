<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $fillable = ['id_objek_wisata','nama_tiket', 'harga_tiket'];

    public function objekWisata()
    {
        return $this->belongsTo(Objek_Wisata::class, 'id_objek_wisata');
    }
}
