<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    use HasFactory;
    protected $fillable = ['rating',
                            'ulasan',
                            'kritik_saran',
                            'penilaian_atraksi',
                            'penilaian_aksesibilitas',
                            'penilaian_amenitas',
                            'penilaian_ansilari1',
                            'penilaian_ansilari2',
                            'penilaian_nps'];
}
