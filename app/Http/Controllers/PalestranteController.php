<?php

/**
 * Desenvolvido pelos alunos: Bruno e Enzo
 * Disciplina: Programação Web - Fatec Prudente
 */

namespace App\Http\Controllers;

use App\Models\Palestrante;
use Illuminate\Http\Request;

class PalestranteController extends Controller
{
    public function index()
    {
        $palestrantes = Palestrante::orderBy('nome')->get();
        return view('palestrantes.index', compact('palestrantes'));
    }

    public function create()
    {
        return view('palestrantes.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome'         => ['required', 'string', 'max:255'],
            'email'        => ['required', 'email', 'max:255', 'unique:palestrantes,email'],
            'telefone'     => ['nullable', 'string', 'max:20'],
            'especialidade'=> ['nullable', 'string', 'max:255'],
        ]);

        Palestrante::create($dados);

        return redirect()
            ->route('palestrantes.index')
            ->with('sucesso', 'Palestrante criado com sucesso!');
    }

    public function show(Palestrante $palestrante)
    {
        return view('palestrantes.show', compact('palestrante'));
    }

    public function edit(Palestrante $palestrante)
    {
        return view('palestrantes.edit', compact('palestrante'));
    }

    public function update(Request $request, Palestrante $palestrante)
    {
        $dados = $request->validate([
            'nome'         => ['required', 'string', 'max:255'],
            'email'        => ['required', 'email', 'max:255', 'unique:palestrantes,email,' . $palestrante->id],
            'telefone'     => ['nullable', 'string', 'max:20'],
            'especialidade'=> ['nullable', 'string', 'max:255'],
        ]);

        $palestrante->update($dados);

        return redirect()
            ->route('palestrantes.index')
            ->with('sucesso', 'Palestrante atualizado com sucesso!');
    }

    public function destroy(Palestrante $palestrante)
    {
        $palestrante->delete();

        return redirect()
            ->route('palestrantes.index')
            ->with('sucesso', 'Palestrante excluído com sucesso!');
    }
}
