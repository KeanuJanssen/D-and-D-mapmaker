<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [
        'map_id', 'user_id', 'map_name', 'grid_size', 'paper_size', 'grid_array',
    ];
}