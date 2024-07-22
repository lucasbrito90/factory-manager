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
        Schema::create('warehouse_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_warehouse_category')
                ->nullable()
                ->constrained('warehouse_categories');
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->decimal('quantity', 10, 2)->default(0);
            $table->decimal('height', 10, 2)->default(0);
            $table->decimal('width', 10, 2)->default(0);
            $table->decimal('length', 10, 2)->default(0);
            $table->integer('available_stock')->default(0);
            $table->integer('minimum_stock')->default(0);
            $table->string('unit_of_measurement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouse_items');
    }
};
