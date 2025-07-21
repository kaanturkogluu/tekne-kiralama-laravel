<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    protected $fillable = [
        'owner_id', 'name', 'category', 'model_year', 'length', 'capacity', 'daily_price', 'description', 'location', 'image', 'commission_rate', 'approval_status', 'pending_changes', 'status'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function images()
    {
        return $this->hasMany(BoatImage::class);
    }

    public function categories()
    {
        return $this->belongsToMany(BoatCategory::class, 'boat_category_pivot', 'boat_id', 'category_id');
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
