<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objek_Wisata extends Model
{
    use HasFactory;
    protected $table = 'objek_wisatas';
    protected $fillable = ['nama_destinasi',
                            'jenis',
                            'deskripsi',
                            'lokasi',
                            'harga_tiket',
                            'foto',
                        ];

    public function timeline()
    {
        return $this->hasMany(ObjekWisataTimeline::class, 'objek_wisata_id', 'id');
    }

    public function fasilitas()
    {
        return $this->hasMany(ObjekWisataFasilitas::class, 'objek_wisata_id', 'id');
    }
}
