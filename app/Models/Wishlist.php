<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'objek_wisata_id'];

    public function objekWisata()
    {
        return $this->belongsTo(Objek_Wisata::class, 'objek_wisata_id');
    }

}
