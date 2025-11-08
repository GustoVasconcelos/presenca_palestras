<?php

namespace App\Http\Controllers;

use App\Models\Palestra;
use Illuminate\Http\Request;

class PalestraController extends Controller
{
    // LISTAR
    public function index()
    {
        $palestras = Palestra::orderBy('data', 'desc')->get();
        return view('palestras.index', compact('palestras'));
    }
    // FORM CRIAR
    public function create()
    {
        return view('palestras.create');
    }
    // SALVAR
    public function store(Request $request)
    {
        $dados = $request->validate([
        'titulo' => ['required', 'min:3', 'max:255'],
        'palestrante' => ['required', 'min:3', 'max:255'],
        'data' => ['required', 'date'],
        'local' => ['required', 'min:2', 'max:255'],
        'descricao' => ['nullable', 'min:3'],
        ]);
        
        Palestra::create($dados);
        
        return redirect()->route('palestras.index')->with('sucesso', 'Palestra cadastrada com sucesso!');
    }

    // MOSTRAR (opcional nesta aula)
    public function show(Palestra $palestra)
    {
        return view('palestras.show', compact('palestra'));
    }

    // FORM EDITAR
    public function edit(Palestra $palestra)
    {
        return view('palestras.edit', compact('palestra'));
    }
    
    // ATUALIZAR
    public function update(Request $request, Palestra $palestra)
    {
        $dados = $request->validate([
            'titulo' => ['required', 'min:3', 'max:255'],
            'palestrante' => ['required', 'min:3', 'max:255'],
            'data' => ['required', 'date'],
            'local' => ['required', 'min:2', 'max:255'],
            'descricao' => ['nullable', 'min:3'],
        ]);

        $palestra->update($dados);

        return redirect()->route('palestras.index')->with('sucesso', 'Palestra atualizada com sucesso!');
    }

    // EXCLUIR
    public function destroy(Palestra $palestra)
    {
        $palestra->delete();
        
        return redirect()->route('palestras.index')->with('sucesso', 'Palestra removida com sucesso!');
    }
}
