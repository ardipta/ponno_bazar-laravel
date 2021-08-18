<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersPurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'journey_id',
        'user_name',
        'user_mobile',
        'cashback_amount',
    ];
}
