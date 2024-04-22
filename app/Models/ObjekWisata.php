<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjekWisata extends Model
{
    use HasFactory;

    protected $fillable = ['nama_destinasi', 'lokasi', 'longitude', 'latitude', 'jam_operasional', 'jenis', 'nama_tiket', 'harga_tiket', 'foto'];

}
