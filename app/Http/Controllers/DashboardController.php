<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Aluno;
use App\Models\Palestrante;
use App\Models\Evento;
use App\Models\Palestra;

class DashboardController extends Controller
{
    private function garantirLogin()
    {
        if (! session('admin_id')) {
            return redirect()->route('login')
                ->withErrors(['login' => 'Faça login para acessar o painel de controle.']);
        }
        return null;
    }

    public function index()
    {
        if ($redirect = $this->garantirLogin()) {
            return $redirect;
        }

        $totais = [
            'cursos'       => Curso::count(),
            'alunos'       => Aluno::count(),
            'palestrantes' => Palestrante::count(),
            'eventos'      => Evento::count(),
            'palestras'    => Palestra::count(),
        ];

        return view('dashboard.index', compact('totais'));
    }

    public function registrarPresenca()
    {
        if ($redirect = $this->garantirLogin()) {
            return $redirect;
        }

        return view('dashboard.registrar_presenca');
    }

    public function listaInscritos()
    {
        if ($redirect = $this->garantirLogin()) {
            return $redirect;
        }

        return view('dashboard.lista_inscritos');
    }

    public function listaPresencas()
    {
        if ($redirect = $this->garantirLogin()) {
            return $redirect;
        }

        return view('dashboard.lista_presencas');
    }
}
