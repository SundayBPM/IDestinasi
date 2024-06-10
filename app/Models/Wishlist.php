<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'id_objek_wisata',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Objek_Wisata()
    {
        return $this->belongsTo(Objek_Wisata::class);
    }
}


