<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'reservation_status' => ['Open', 'Closed'][rand(0, 1)],
            'reservation_method' => ['Online', 'Phone'][rand(0, 1)],
            'requires_products' => ['Yes', 'No'][rand(0, 1)],
            'activity_status' => ['Active', 'Inactive'][rand(0, 1)],
            'store_payment_method' => ['Credit', 'Cash'][rand(0, 1)],
        ];
    }
}
