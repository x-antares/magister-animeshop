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
        Schema::create('valueable', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->index()->nullable();
            $table->string('slug')->index()->nullable();
            $table->uuid('attribute_id')->index()->nullable();
            $table->uuidMorphs('model');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valueable');
    }
};
