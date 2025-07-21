<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoatCategoryPivot extends Model
{
    protected $fillable = [
        'boat_id', 'category_id'
    ];
}
