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
        Schema::create('project_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_project')->constrained('projects');
            $table->foreignId('id_item')->nullable()->constrained('items');
            $table->foreignId('id_process')->nullable()->constrained('processes');

            $table->string('name');
            $table->text('description')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->decimal('quantity', 10, 2)->default(0);
            $table->decimal('height', 10, 2)->default(0);
            $table->decimal('width', 10, 2)->default(0);
            $table->decimal('length', 10, 2)->default(0);
            $table->decimal('weight', 10, 2)->default(0);
            $table->decimal('status', 10, 2)->default(0);
            $table->string('current_sector')->default('');
            $table->string('status_current_sector')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_items');
    }
};
