<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurant::create([
            'id' => 24,
            'name' => "القلعة",
            'longitude' => fake()->longitude(),
            'latitude' => fake()->latitude(),
        ]);
        Restaurant::create([
            'id' => 12,
            'name' => "الشيباني",
            'longitude' => fake()->longitude(),
            'latitude' => fake()->latitude(),
        ]);
        Restaurant::create([
            'id' => 41,
            'name' => "ستار برجر",
            'longitude' => fake()->longitude(),
            'latitude' => fake()->latitude(),
        ]);
    }
}
