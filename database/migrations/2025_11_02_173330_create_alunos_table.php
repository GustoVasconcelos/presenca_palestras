<?php

/**
 * Desenvolvido pelos alunos: Karina e Victor
 * Disciplina: Programação Web - Fatec Prudente
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
            $table->string('ra', 20)->unique();
            $table->string('password');
            $table->string('email', 100)->unique();

            $table->foreignId('curso_id')
                  ->constrained('cursos')
                  ->onDelete('restrict');

            $table->date('data_nasc');
            $table->enum('sexo', ['Masculino', 'Feminino', 'Não Informar']);
            $table->tinyInteger('modulo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
