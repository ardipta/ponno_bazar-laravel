<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus_service extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'bus_service_name',
        'bus_type',
        'bus_number',
        'bus_model',
        'departure_time',
        'arrival_time',
        'date_range_from',
        'date_range_to',
        'total_seat',
        'fare'
    ];
}
