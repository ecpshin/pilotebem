<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evento_modulo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evento_id')->constrained('eventos', 'id')->cascadeOnDelete();
            $table->foreignId('modulo_id')->constrained('modulos', 'id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_modulo');
    }
};
