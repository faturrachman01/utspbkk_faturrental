<?php

// app/Models/Car.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'year',
        'price_per_day',
        'license_plate',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
