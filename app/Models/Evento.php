<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = ['titulo', 'dataInicio', 'dataFim', 'local', 'descricao', 'curso'];
    protected $casts = ['dataInicio' => 'datetime', 'dataFim' => 'datetime'];
}
