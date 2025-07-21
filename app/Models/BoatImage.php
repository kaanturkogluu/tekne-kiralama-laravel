<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoatImage extends Model
{
    protected $fillable = [
        'boat_id', 'image_path', 'is_cover', 'order'
    ];

    public function boat()
    {
        return $this->belongsTo(Boat::class);
    }
}
