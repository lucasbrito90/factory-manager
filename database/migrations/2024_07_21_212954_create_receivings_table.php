<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('receivings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_order_id')->constrained('purchase_orders');
            $table->date('received_date')->nullable();
            $table->string('tracking_number')->nullable();
            $table->decimal('shipping_cost', 10, 2)->nullable();
            $table->string('shipping_method')->nullable();
            $table->string('delivery_company')->nullable();
            $table->string('driver')->nullable();
            $table->enum('status', ['pending', 'received', 'completed', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receivings');
    }
};
