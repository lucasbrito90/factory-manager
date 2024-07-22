<?php

namespace Database\Seeders;

use App\Models\WarehouseCategories;
use App\Models\WarehouseItems;
use App\Models\WarehouseTransactions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WarehouseCategories::factory(5)->create()->each(function ($category) {
            WarehouseItems::factory(10)->create(['id_warehouse_category' => $category->id])->each(function ($item) {
                WarehouseTransactions::factory(20)->create(['id_warehouse_item' => $item->id]);
            });
        });
    }
}
