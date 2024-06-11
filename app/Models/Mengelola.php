<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mengelola extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'objek_wisata_id'];

    public $incrementing = false;
    protected $primaryKey = ['user_id', 'objek_wisata_id'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function objekWisata()
    {
        return $this->belongsTo(Objek_Wisata::class, 'objek_wisata_id');
    }
}
