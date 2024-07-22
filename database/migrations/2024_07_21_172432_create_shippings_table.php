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
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_branch')->constrained('branches');
            $table->date('estimated_delivery_date')->nullable();
            $table->string('status')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('shipping_cost')->nullable();
            $table->string('shipping_method')->nullable();
            $table->string('shipping_address')->nullable();
            $table->date('shipping_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};
