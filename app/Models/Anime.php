<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Anime extends Model
{
    protected $table='kapsel_1000';
    protected $fillable = [
        'id',
        'title','episode','type','status',
         'aired', 'producer', 'studio', 'source', 'genre', 'theme', 'duration','rating','member','score'
    ];
}
