<?php

/**
 * Desenvolvido pelos alunos: Bruno e Enzo
 * Disciplina: Programação Web - Fatec Prudente
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palestrante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'especialidade',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function palestras()
    {
        return $this->hasMany(Palestra::class);
    }
}
