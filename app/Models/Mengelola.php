<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mengelola extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'objek_wisata_id',
    ];


}
