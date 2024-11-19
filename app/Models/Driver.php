<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Driver extends Model
{
    protected $fillable = [
        'id',
        'name',
        'status',
        'position',
    ];
    public function scopeAvailable(Builder $query)
    {
        $query->where('status', 1);
    }
    public function scopeNearest(Builder $query, $latitude, $longitude)
    {
        $query->select('id', 'name', 'latitude', 'longitude', DB::raw("
                (6371 * ACOS(
                    COS(RADIANS($latitude))
                    * COS(RADIANS(latitude))
                    * COS(RADIANS(longitude) - RADIANS($longitude))
                    + SIN(RADIANS($latitude))
                    * SIN(RADIANS(latitude))
                )) AS distance
            "))

            ->orderBy('distance', 'ASC');
    }
    public function position(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value),
            set: fn($value) => json_encode($value),
        );
    }
}
