<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Driver::create([
            'id' => 652,
            'name' => 'ahamed',
            'status' => 1,
            'position' => [
                [12 => '3'],
                [24 => '4'],
                ['41' => '4.6']
            ],
            'longitude' => fake()->longitude(),
            'latitude' => fake()->latitude(),
        ]);
        Driver::create([
            'id' => 120,
            'name' => 'Sami',
            'status' => 1,
            'position' => [
                ['24' => '5'],
                ['12' => '7'],
                ['41' => '4.6']
            ],
            'longitude' => fake()->longitude(),
            'latitude' => fake()->latitude(),
        ]);
        Driver::create([
            'id' => 111,
            'name' => 'Morad',
            'status' => 1,
            'position' => [
                ['24' => '3'],
                ['12' => '1.5'],
                ['41' => '6'],
            ],
            'longitude' => fake()->longitude(),
            'latitude' => fake()->latitude(),
        ]);
        Driver::create([
            'id' => 60,
            'name' => 'Hassan',
            'status' => 0,
            'position' => [
                ['24' => '2'],
                ['12' => '1'],
                ['41' => '6'],
            ],
            'longitude' => fake()->longitude(),
            'latitude' => fake()->latitude(),
        ]);
        Driver::create([
            'id' => 75,
            'name' => 'samier',
            'status' => 1,
            'position' => [
                ['24' => '2'],
                ['12' => '5'],
                ['41' => '3']
            ],
            'longitude' => fake()->longitude(),
            'latitude' => fake()->latitude(),
        ]);
    }
}
