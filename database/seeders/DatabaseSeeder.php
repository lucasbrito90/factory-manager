<?php

namespace Database\Seeders;

use App\Models\Branches;
use App\Models\Containers;
use App\Models\Customers;
use App\Models\Items;
use App\Models\ProjectItems;
use App\Models\Projects;
use App\Models\Shelves;
use App\Models\Shipping;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            EnrollmentSeeder::class,
            WarehouseSeeder::class,
            ReceivingSeeder::class,
        ]);
    }
}
