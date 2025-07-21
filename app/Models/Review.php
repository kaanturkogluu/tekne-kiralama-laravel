<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'customer_id', 'boat_id', 'rating', 'comment'
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function boat()
    {
        return $this->belongsTo(Boat::class);
    }
}
