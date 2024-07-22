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
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = Customers::factory(5)->create();

        $customers->each(function ($customer) {
            $branches = Branches::factory(3)->create(['id_customer' => $customer->id]);

            $branches->each(function ($branch) {
                $projects = Projects::factory(4)->create(['id_branch' => $branch->id]);

                $projects->each(function ($project) {
                    $projectItems =  ProjectItems::factory(5)->create(['id_project' => $project->id]);

                });

                $shipments = Shipping::factory(3)->create(['id_branch' => $branch->id]);

                $shipments->each(function ($shipment) {
                    $shelves = Shelves::factory(3)->create();

                    $shelves->each(function ($shelf) {
                        $containers = Containers::factory(3)->create([
                            'id_shelf' => $shelf->id,
                            'id_shipping' => $shelf->id_shipping
                        ]);

                        $containers->each(function ($container) {
                            Items::factory(5)->create([
                                'id_container' => $container->id,
                            ]);
                        });
                    });
                });
            });
        });
    }
}
