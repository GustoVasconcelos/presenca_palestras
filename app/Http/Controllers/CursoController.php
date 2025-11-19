<?php

/**
 * Desenvolvido pelas alunas: Larissa e Stefany
 * Disciplina: Programação Web - Fatec Prudente
 */

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('data_inicio', 'desc')->get();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome'         => ['required', 'string', 'max:255'],
            'descricao'    => ['nullable', 'string', 'min:3'],
            'carga_horaria'=> ['nullable', 'integer'],
            'instrutor'    => ['nullable', 'string', 'min:2'],
            'categoria'    => ['nullable', 'string', 'min:3'],
            'data_inicio'  => ['nullable', 'date'],
            'data_fim'     => ['nullable', 'date'],
        ]);

        Curso::create($dados);

        return redirect()
            ->route('cursos.index')
            ->with('sucesso', 'Curso cadastrado com sucesso!');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $dados = $request->validate([
            'nome'         => ['required', 'string', 'max:255'],
            'descricao'    => ['nullable', 'string', 'min:3'],
            'carga_horaria'=> ['nullable', 'integer'],
            'instrutor'    => ['nullable', 'string', 'min:2'],
            'categoria'    => ['nullable', 'string', 'min:3'],
            'data_inicio'  => ['nullable', 'date'],
            'data_fim'     => ['nullable', 'date'],
        ]);

        $curso->update($dados);

        return redirect()
            ->route('cursos.index')
            ->with('sucesso', 'Curso atualizado com sucesso!');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()
            ->route('cursos.index')
            ->with('sucesso', 'Curso removido com sucesso!');
    }
}
