<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'driver_id',
        'restaurant_id',
        'status',
        'time_elapsed',
        'price',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'user_id');
    }
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function price(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value / 100,
            set: fn($value) => (int) $value * 100,
        );
    }
}
