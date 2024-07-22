<?php

namespace Database\Factories;

use App\Models\WarehouseItems;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WarehouseTransactions>
 */
class WarehouseTransactionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_warehouse_item' => WarehouseItems::factory(),
            'transaction_type' => $this->faker->randomElement(['IN', 'OUT']),
            'quantity' => $this->faker->randomFloat(2, 1, 1000),
            'transaction_date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'notes' => $this->faker->text,
        ];
    }
}
