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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('prenotazioni_id')->nullable();
            $table->foreignId('attivita_id')->nullable();
            $table->foreign('prenotazioni_id')->references('id')->on('prenotazionis')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('attivita_id')->references('id')->on('attivitas')
                    ->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('is_admin')->default(false); // Aggiunto campo 'is_admin'
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
