<?php

namespace Database\Factories;

use App\Models\PurchaseOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receiving>
 */
class ReceivingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'purchase_order_id' => PurchaseOrder::factory(),
            'received_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'tracking_number' => $this->faker->word(),
            'shipping_cost' => $this->faker->randomFloat(2, 0, 999.99),
            'shipping_method' => $this->faker->word(),
            'delivery_company' => $this->faker->word(),
            'driver' => $this->faker->name,
            'status' => $this->faker->randomElement(['pending', 'received', 'completed', 'cancelled']),
        ];
    }
}
