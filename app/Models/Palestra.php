<?php 

/**
 * Desenvolvido pelos alunos: João Pedro e João Victor
 * Disciplina: Programação Web - Fatec Prudente
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palestra extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'palestrante_id',
        'data',
        'local',
        'descricao',
        'evento_id',
    ];

    protected $casts = [
        'data' => 'datetime',
    ];

    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }

    public function palestrante()
    {
        return $this->belongsTo(Palestrante::class);
    }
}
