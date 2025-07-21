<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoatCategory extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function boats()
    {
        return $this->belongsToMany(Boat::class, 'boat_category_pivot', 'category_id', 'boat_id');
    }
}
