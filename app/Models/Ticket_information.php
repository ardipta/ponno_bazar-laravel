<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket_information extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'bus_service_name',
        'passenger_name',
        'passenger_phone',
        'passenger_gender',
        'passenger_email',
        'date_range_from',
        'departure_time',
        'booked_seat',
        'total_fare',
    ];
}
