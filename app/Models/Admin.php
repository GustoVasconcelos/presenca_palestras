<?php

/**
 * Módulo Gerenciar Admin
 * Campos: login, password, nome_completo
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'login',
        'password',
        'nome_completo',
    ];

    protected $hidden = [
        'password',
    ];
}
