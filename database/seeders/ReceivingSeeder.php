<?php

namespace Database\Seeders;

use App\Models\ProductPurchaseOrder;
use App\Models\PurchaseOrder;
use App\Models\Receiving;
use App\Models\Suppliers;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReceivingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create();

        $purchases = PurchaseOrder::factory()->create([
            'user_id' => $user->id,
        ]);

        $purchases->each(function ($purchaseOrder){
            ProductPurchaseOrder::factory(5)->create([
                'purchase_order_id' => $purchaseOrder->id,
            ]);

            Receiving::factory()->create([
                'purchase_order_id' => $purchaseOrder->id,
            ]);
        });
    }
}
