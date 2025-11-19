<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        // Página pública inicial
        return view('site.index');
    }

    public function eventos()
    {
        // Futuro: listar eventos públicos
        return view('site.eventos');
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
