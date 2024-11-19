<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'reservation_status',
        'reservation_method',
        'requires_products',
        'activity_status',
        'store_payment_method',
    ];
}
