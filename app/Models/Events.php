<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = ['title',
                            'start_event',
                            'end_event',
                            'desc',
                            'place_event',
                            'image_path'
                        ];
}
