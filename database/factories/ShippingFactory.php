<?php

namespace Database\Factories;

use App\Models\Branches;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipping>
 */
class ShippingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_branch' => Branches::factory(),
            'estimated_delivery_date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'status' => $this->faker->word,
            'tracking_number' => $this->faker->word,
            'shipping_cost' => $this->faker->randomFloat(2, 1, 1000),
            'shipping_method' => $this->faker->word,
            'shipping_address' => $this->faker->address,
            'shipping_date' => $this->faker->dateTimeBetween('-2 year', 'now')->format('Y-m-d'),
        ];
    }
}
