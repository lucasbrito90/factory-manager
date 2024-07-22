<?php

namespace Database\Factories;

use App\Models\WarehouseCategories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WarehouseItems>
 */
class WarehouseItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_warehouse_category' => WarehouseCategories::factory(),
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'quantity' => $this->faker->randomFloat(2, 1, 1000),
            'height' => $this->faker->randomFloat(2, 1, 1000),
            'width' => $this->faker->randomFloat(2, 1, 1000),
            'length' => $this->faker->randomFloat(2, 1, 1000),
            'available_stock' => $this->faker->numberBetween(0, 1000), // updated from randomDigit(
            'minimum_stock' => $this->faker->numberBetween(0, 1000), // updated from randomDigit(
            'unit_of_measurement' => $this->faker->randomElement(["cm","m","mm","in","ft",'un', 'kg', 'g', 'm', 'l'])
        ];
    }
}
