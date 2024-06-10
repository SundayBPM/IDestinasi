<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketTour extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function timeline()
    {
        return $this->hasMany(PaketTourTimeline::class, 'paket_tour_id', 'id');
    }

    public function fasilitas()
    {
        return $this->hasMany(PaketTourFasilitas::class, 'paket_tour_id', 'id');
    }
}
