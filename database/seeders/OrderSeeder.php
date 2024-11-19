<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'id' => 12532,
            'user_id' => 105,
            'driver_id' => 652,
            'restaurant_id' => 12,
            'status' => 4,
            'time_elapsed' => 12,
            'price' => 2300
        ]);
        Order::create([
            'id' => 23215,
            'user_id' => 99,
            'driver_id' => 120,
            'restaurant_id' => 41,
            'status' => 3,
            'time_elapsed' => 10,
            'price' => 5230
        ]);
        Order::create([
            'id' => 28215,
            'user_id' => 12,
            'restaurant_id' => 12,
            'status' => 1,
            'time_elapsed' => 2,
            'price' => 9120
        ]);
        Order::create([
            'id' => 65241,
            'user_id' => 66,
            'driver_id' => 111,

            'restaurant_id' => 24,
            'status' => 0,
            'time_elapsed' => 50,
            'price' => 7623
        ]);
        Order::create([
            'id' => 65291,
            'user_id' => 66,

            'restaurant_id' => 24,
            'status' => 1,
            'time_elapsed' => 60,
            'price' => 7623
        ]);
    }
}
