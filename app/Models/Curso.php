<?php

/**
 * Desenvolvido pelas alunas: Larissa e Stefany
 * Disciplina: Programação Web - Fatec Prudente
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'carga_horaria',
        'instrutor',
        'categoria',
        'data_inicio',
        'data_fim',
    ];

    protected $casts = [
        'data_inicio' => 'date',
        'data_fim' => 'date',
    ];

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }

    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }
}
