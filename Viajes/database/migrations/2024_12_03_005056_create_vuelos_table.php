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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_vuelo')->unique();
            $table->string('aerolinea');
            $table->string('origen');
            $table->string('destino');
            $table->time('hora_salida');
            $table->time('hora_llegada');
            $table->integer('duracion'); // en minutos
            $table->decimal('precio', 8, 2);
            $table->boolean('tiene_escalas');
            $table->integer('asientos_disponibles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
