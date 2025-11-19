<?php

/**
 * Desenvolvido pelos alunos: Karina e Victor
 * Disciplina: Programação Web - Fatec Prudente
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'ra',
        'password',
        'email',
        'curso_id',
        'data_nasc',
        'sexo',
        'modulo',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'data_nasc' => 'date',
        'modulo'    => 'integer',
        'password'  => 'hashed',
    ];

    public function curso(): BelongsTo
    {
        return $this->belongsTo(Curso::class);
    }
}
