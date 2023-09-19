<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rental_bookings extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id',
        'User_phone',
        'user_name',
        'pickup_date',
        'return_date',
        'pickup_Time',
        'return_Time',
    ];
}
