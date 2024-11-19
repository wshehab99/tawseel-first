<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'id' => 105,
            'name' => 'ali',
            'order_no' => 2,

        ]);
        Customer::create([
            'id' => 99,
            'name' => 'said',
            'order_no' => 4,

        ]);
        Customer::create([
            'id' => 12,
            'name' => 'Mohammed',
            'order_no' => 3,

        ]);
        Customer::create([
            'id' => 66,
            'name' => 'samer',
            'order_no' => 2,

        ]);
    }
}
