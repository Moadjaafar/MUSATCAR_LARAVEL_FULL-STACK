<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    use HasFactory;
    protected $fillable = [
        'marke_id',
        'marke_name',
        'model',
        'year',
        'color',
        'price_per_day',
        'availability',
        'Seats_nbr',
        'Drive_type',
        'Transmission_type',
        'car_images_First'
    ];
}
