<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Curso;

class SiteController extends Controller
{
    public function index()
    {
        // Página pública inicial
        return view('site.index');
    }

    public function eventos()
    {
        /**
        * Desenvolvido pelos alunos: Karina e Victor
        * Disciplina: Programação Web - Fatec Prudente
        */
        $eventos = Evento::with('curso')
            ->where('dataFim', '>', now()) // Filtra onde a data final é MAIOR que agora
            ->orderBy('dataInicio', 'asc')
            ->get();

        return view('site.eventos', compact('eventos'));
    }

    public function palestras()
    {
        // Futuro: listar palestras públicas
        return view('site.palestras');
    }

    public function inscricao()
    {
        // Futuro: formulário de inscrição em palestra (RA + senha)
        return view('site.inscricao');
    }
}
