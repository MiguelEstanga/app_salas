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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->string('descripcion')->nullable;
            $table->string('tipoEvento');
//            $table->dateTime('horario');
//            $table->dateTime('horario_fin');
            $table->integer('fk_idSala');
            $table->integer('fk_idUsuario')->comment('relacion de usuario creador de la reserva');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
