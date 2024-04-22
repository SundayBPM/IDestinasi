<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objek_Wisata extends Model
{
    use HasFactory;
    protected $fillable = ['nama_destinasi',
                            'jenis',
                            'deskripsi',
                            'lokasi',
                            'harga_tiket'];
}
