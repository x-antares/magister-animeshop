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
        Schema::create('purchase_products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->decimal('price', 10, 2)->default(0);
            $table->integer('qty')->default(0);
            $table->string('name')->index()->nullable();
            $table->uuid('product_id')->index()->nullable();
            $table->uuid('order_id')->index()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_products');
    }
};
