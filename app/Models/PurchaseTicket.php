<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'journey_id',
        'user_id',
        'from',
        'to',
        'purchase_date',
        'journey_date',
        'bus_id',
        'departure_time',
        'number_of_seat',
        'fare',
        'discounted_fare',
        'discount_amount',
        'journey_status',
        'validity',
        'payment_method',
    ];
}
