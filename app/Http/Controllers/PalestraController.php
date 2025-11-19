<?php

/**
 * Desenvolvido pelos alunos: João Pedro e João Victor
 * Ajustado e padronizado para o Projeto Unificado – Fatec Prudente
 */

namespace App\Http\Controllers;

use App\Models\Palestra;
use App\Models\Palestrante;
use App\Models\Evento;
use Illuminate\Http\Request;

class PalestraController extends Controller
{
    public function index()
    {
        $palestras = Palestra::with(['palestrante', 'evento'])
            ->orderBy('data', 'desc')
            ->get();

        return view('palestras.index', compact('palestras'));
    }

    public function create()
    {
        $palestrantes = Palestrante::orderBy('nome')->get();
        $eventos = Evento::orderBy('dataInicio')->get();

        return view('palestras.create', compact('palestrantes', 'eventos'));
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo'          => 'required|min:3|max:255',
            'data'            => 'required|date',
            'local'           => 'required|min:2|max:255',
            'descricao'       => 'nullable|min:3',
            'palestrante_id'  => 'required|exists:palestrantes,id',
            'evento_id'       => 'nullable|exists:eventos,id',
        ]);

        Palestra::create($dados);

        return redirect()
            ->route('palestras.index')
            ->with('sucesso', 'Palestra cadastrada com sucesso!');
    }

    public function show(Palestra $palestra)
    {
        $palestra->load(['palestrante', 'evento']);
        return view('palestras.show', compact('palestra'));
    }

    public function edit(Palestra $palestra)
    {
        $palestrantes = Palestrante::orderBy('nome')->get();
        $eventos = Evento::orderBy('dataInicio')->get();

        return view('palestras.edit', compact('palestra', 'palestrantes', 'eventos'));
    }

    public function update(Request $request, Palestra $palestra)
    {
        $dados = $request->validate([
            'titulo'          => 'required|min:3|max:255',
            'data'            => 'required|date',
            'local'           => 'required|min:2|max:255',
            'descricao'       => 'nullable|min:3',
            'palestrante_id'  => 'required|exists:palestrantes,id',
            'evento_id'       => 'nullable|exists:eventos,id',
        ]);

        $palestra->update($dados);

        return redirect()
            ->route('palestras.index')
            ->with('sucesso', 'Palestra atualizada com sucesso!');
    }

    public function destroy(Palestra $palestra)
    {
        $palestra->delete();

        return redirect()
            ->route('palestras.index')
            ->with('sucesso', 'Palestra removida com sucesso!');
    }
}
