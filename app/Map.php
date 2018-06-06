<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected  $primaryKey = 'map_id';
    

    protected $fillable = [
        'map_id', 'user_id', 'map_name', 'grid_size', 'paper_size', 'grid_array',
    ];
}
