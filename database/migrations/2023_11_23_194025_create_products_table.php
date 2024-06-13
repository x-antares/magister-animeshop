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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('slug')->index()->nullable();
            $table->string('code')->index()->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->integer('qty')->default(0);
            $table->tinyInteger('in_stock')->default(0);
            $table->tinyInteger('is_featured')->default(0);
            $table->string('name')->index()->nullable();
            $table->text('short_description')->nullable();
            $table->text('body')->nullable();
            $table->text('additional_information')->nullable();
            $table->uuid('category_id')->index()->nullable();
            $table->uuid('brand_id')->index()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
