<?php

namespace Database\Factories;

use App\Models\Items;
use App\Models\Processes;
use App\Models\Projects;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectItems>
 */
class ProjectItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_project' => Projects::factory(),
            'id_process' => Processes::factory(), // This is a placeholder, you can change it to a valid process id if needed
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'quantity' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'height' => $this->faker->randomFloat(2, 1, 100),
            'width' => $this->faker->randomFloat(2, 1, 100),
            'length' => $this->faker->randomFloat(2, 1, 100),
            'weight' => $this->faker->randomFloat(2, 1, 100),
            'id_item' => Items::factory(),
            'status' => $this->faker->randomFloat(2, 0, 100),
            'current_sector' => $this->faker->word,
            'status_current_sector' => $this->faker->word,
        ];
    }
}
