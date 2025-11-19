<?php

/**
 * Desenvolvido pelos alunos: Bruno e Enzo
 * Disciplina: Programação Web - Fatec Prudente
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('palestrantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('email', 255)->unique();
            $table->string('telefone', 20)->nullable();
            $table->string('especialidade', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('palestrantes');
    }
};
