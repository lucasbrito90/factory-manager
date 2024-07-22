<?php

namespace Database\Factories;

use App\Models\PurchaseOrder;
use App\Models\Suppliers;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PurchaseOrder>
 */
class PurchaseOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'suppliers_id' => Suppliers::factory(),
            'user_id' => User::factory(),
            'order_date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'estimated_delivery_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
        ];
    }

    public function configure(): PurchaseOrderFactory|Factory
    {
        return $this->afterCreating(function (PurchaseOrder $purchaseOrder) {
            $suppliers = Suppliers::factory()->count(3)->create();
            $purchaseOrder->suppliers()->attach($suppliers->pluck('id')->toArray());
        });
    }
}
