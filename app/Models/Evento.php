<?php

/**
 * Desenvolvido pelos alunos: Augusto e João
 * Disciplina: Programação Web - Fatec Prudente
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'titulo',
        'dataInicio',
        'dataFim',
        'local',
        'descricao',
        'curso_id',
    ];

    protected $casts = [
        'dataInicio' => 'datetime',
        'dataFim'    => 'datetime',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function palestras()
    {
        return $this->hasMany(Palestra::class);
    }
}
