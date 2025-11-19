<?php

/**
 * Desenvolvido pelos alunos: Augusto e João
 * Disciplina: Programação Web - Fatec Prudente
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->dateTime('dataInicio');
            $table->dateTime('dataFim');
            $table->string('local');
            $table->text('descricao')->nullable();
            $table->foreignId('curso_id')
                  ->nullable()
                  ->constrained('cursos')
                  ->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
