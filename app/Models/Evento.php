<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    // protected $fillable = ['titulo', 'dataInicio', 'dataFim', 'local', 'descricao', 'curso'];
    protected $fillable = ['titulo', 'dataInicio', 'dataFim', 'local', 'descricao', 'curso_id'];
    protected $casts = ['dataInicio' => 'datetime', 'dataFim' => 'datetime'];

    /**
     * Define o relacionamento: Um Evento pertence a um Curso.
     */
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}
