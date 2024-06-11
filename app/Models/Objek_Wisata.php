<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objek_Wisata extends Model
{
    public $table = 'objek_wisatas';
    use HasFactory;
    protected $fillable = ['nama_wisata',
                            'deskripsi',
                            'lokasi',
                            'longitude',
                            'latitude',
                            'jam_operasional',
                            'jenis',
                            'foto',
                            ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'wishlist', 'objek_wisata_id', 'user_id');
    }
                                                        
}
