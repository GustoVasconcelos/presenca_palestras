<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nome'];

    /**
     * Define o relacionamento: Um Curso tem muitos Eventos.
     */
    public function eventos()
    {
        return $this->hasMany(Evento::class, 'curso_id');
    }
}
