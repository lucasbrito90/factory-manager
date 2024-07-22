<?php

namespace Database\Factories;

use App\Models\Shelves;
use App\Models\Shipping;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Containers>
 */
class ContainersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_shelf' => Shelves::factory(),
            'id_shipping' => Shipping::factory(),
            'code' => $this->faker->word,
            'estimated_delivery_date' => $this->faker->dateTimeBetween('-1 year', '+1 year')->format('Y-m-d'),
        ];
    }
}
