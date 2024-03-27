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
        Schema::create('oraris', function (Blueprint $table) {
            $table->id();
            $table->string('orario_inizio');
            $table->string('orario_fine');
            $table->foreignId('attivita_id');
            $table->foreign('attivita_id')->references('id')->on('attivitas')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oraris');
    }
};
