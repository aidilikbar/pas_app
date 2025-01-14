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
        Schema::create('pas_soil_healths', function (Blueprint $table) {
            $table->id();
            $table->foreignId('field_id')->constrained('pas_fields')->onDelete('cascade');
            $table->decimal('ph_level', 3, 2);
            $table->json('nutrient_levels');
            $table->timestamp('recorded_at')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pas_soil_healths');
    }
};
