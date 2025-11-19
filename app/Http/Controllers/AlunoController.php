<?php

/**
 * Desenvolvido pelos alunos: Karina e Victor
 * Disciplina: Programação Web - Fatec Prudente
 */

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(Request $request)
    {
        $query = Aluno::with('curso')->orderBy('nome', 'asc');

        $cursoFiltro = $request->get('curso_id');
        if ($cursoFiltro) {
            $query->where('curso_id', $cursoFiltro);
        }

        $alunos = $query->get();
        $cursos = Curso::orderBy('nome')->get();

        return view('alunos.index', compact('alunos', 'cursos', 'cursoFiltro'));
    }

    public function create()
    {
        $cursos = Curso::orderBy('nome')->get();
        return view('alunos.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $dadosValidados = $request->validate([
            'nome'      => ['required', 'string', 'min:3', 'max:150'],
            'ra'        => ['required', 'string', 'unique:alunos,ra', 'max:20'],
            'email'     => ['required', 'email', 'unique:alunos,email', 'max:100'],
            'password'  => ['required', 'string', 'min:6'],
            'curso_id'  => ['required', 'integer', 'exists:cursos,id'],
            'modulo'    => ['required', 'numeric', 'between:1,6'],
            'data_nasc' => ['required', 'date'],
            'sexo'      => ['required', 'in:Masculino,Feminino,Não Informar'],
        ]);

        Aluno::create($dadosValidados);

        return redirect()
            ->route('alunos.index')
            ->with('sucesso', 'Aluno cadastrado com sucesso!');
    }

    public function show(Aluno $aluno)
    {
        $aluno->load('curso');
        return view('alunos.show', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {
        $cursos = Curso::orderBy('nome')->get();
        return view('alunos.edit', compact('aluno', 'cursos'));
    }

    public function update(Request $request, Aluno $aluno)
    {
        $dadosValidados = $request->validate([
            'nome'      => ['required', 'string', 'min:3', 'max:150'],
            'ra'        => ['required', 'string', 'max:20', 'unique:alunos,ra,' . $aluno->id],
            'email'     => ['required', 'email', 'max:100', 'unique:alunos,email,' . $aluno->id],
            'password'  => ['nullable', 'string', 'min:6'],
            'curso_id'  => ['required', 'integer', 'exists:cursos,id'],
            'modulo'    => ['required', 'numeric', 'between:1,6'],
            'data_nasc' => ['required', 'date'],
            'sexo'      => ['required', 'in:Masculino,Feminino,Não Informar'],
        ]);

        if (empty($dadosValidados['password'])) {
            unset($dadosValidados['password']);
        }

        $aluno->update($dadosValidados);

        return redirect()
            ->route('alunos.index')
            ->with('sucesso', 'Aluno atualizado com sucesso!');
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect()
            ->route('alunos.index')
            ->with('sucesso', 'Aluno removido com sucesso!');
    }
}
