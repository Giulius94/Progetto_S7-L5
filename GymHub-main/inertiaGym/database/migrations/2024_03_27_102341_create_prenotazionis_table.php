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
        Schema::create('prenotazionis', function (Blueprint $table) {
            $table->id();
            $table->string('stato')->nullable();
            $table->foreignId('attivita_id');
            $table->foreignId('orari_id');      
             $table->foreign('attivita_id')->references('id')->on('attivitas')
                    ->onUpdate('cascade')->onDelete('cascade');
             $table->foreign('orari_id')->references('id')->on('oraris')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prenotazionis');
    }
};
