<?php

/**
 * Desenvolvido pelos alunos: Augusto e João
 * Disciplina: Programação Web - Fatec Prudente
 */

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Curso;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::with('curso')->orderBy('dataInicio', 'desc')->get();
        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        $cursos = Curso::orderBy('nome')->get();
        return view('eventos.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo'      => ['required', 'min:3', 'max:255'],
            'banner' => ['nullable', 'url', 'max:255'],
            'dataInicio'  => ['required', 'date'],
            'dataFim'     => ['required', 'date', 'after_or_equal:dataInicio'],
            'local'       => ['required', 'min:2', 'max:255'],
            'descricao'   => ['nullable', 'min:3'],
            'curso_id'    => ['nullable', 'exists:cursos,id'],
        ]);

        Evento::create($dados);

        return redirect()
            ->route('eventos.index')
            ->with('sucesso', 'Evento cadastrado com sucesso!');
    }

    public function show(Evento $evento)
    {
        $evento->load('curso');
        return view('eventos.show', compact('evento'));
    }

    public function edit(Evento $evento)
    {
        $cursos = Curso::orderBy('nome')->get();
        return view('eventos.edit', compact('evento', 'cursos'));
    }

    public function update(Request $request, Evento $evento)
    {
        $dados = $request->validate([
            'titulo'      => ['required', 'min:3', 'max:255'],
            'banner' => ['nullable', 'url', 'max:255'],
            'dataInicio'  => ['required', 'date'],
            'dataFim'     => ['required', 'date', 'after_or_equal:dataInicio'],
            'local'       => ['required', 'min:2', 'max:255'],
            'descricao'   => ['nullable', 'min:3'],
            'curso_id'    => ['nullable', 'exists:cursos,id'],
        ]);

        $evento->update($dados);

        return redirect()
            ->route('eventos.index')
            ->with('sucesso', 'Evento atualizado com sucesso!');
    }

    public function destroy(Evento $evento)
    {
        $evento->delete();

        return redirect()
            ->route('eventos.index')
            ->with('sucesso', 'Evento removido com sucesso!');
    }
}
