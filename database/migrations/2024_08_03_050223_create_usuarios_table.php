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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('ci')->unique();
            $table->string('rango');
            $table->string('numeroDePlaca');
            $table->date('fechaDeNacimiento');
            $table->string('sexo');
            $table->string('direccion');
            $table->string('celular');
            $table->string('email')->unique();
            $table->timestamp('verificacionDeEmail')->nullable();
            $table->string('password');
            $table->string('tipo');
            $table->tinyInteger('estado')->default(1);
            $table->rememberToken();
            $table->timestamp('fechaDeCreacion')->nullable();
            $table->timestamp('fechaDeActualizacion')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
