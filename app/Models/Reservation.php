<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'customer_id', 'boat_id', 'start_date', 'end_date', 'total_price', 'commission_amount', 'status', 'payment_status'
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function boat()
    {
        return $this->belongsTo(Boat::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
