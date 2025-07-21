<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'reservation_id', 'amount', 'commission', 'owner_amount', 'payment_date', 'status'
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
