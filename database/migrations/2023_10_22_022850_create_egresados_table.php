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
        Schema::create('egresado', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('ficha')->nullable();
            $table->string('programa')->nullable();
            $table->string('nis')->nullable();
            $table->string('registro')->nullable();
            $table->string('tipo_documento')->nullable();
            $table->string('num_documento')->nullable();
            $table->string('nombre')->nullable();
            $table->string('residencia')->nullable();
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono_al')->nullable();
            $table->string('celular')->nullable();
            $table->string('año')->nullable();
            $table->string('sexo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egresado');
    }
};
