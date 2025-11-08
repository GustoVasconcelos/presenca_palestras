<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    // Listar
    public function index()
    {
        $eventos = Evento::orderBy('dataInicio', 'desc')->get();
        return view('eventos.index', compact('eventos'));
    }

    // Criar Eventom (Form)
    public function create()
    {
        return view('eventos.create');
    }

    // Salvar evento no banco
    public function store(Request $request)
    {
        $dados = $request->validate([
        'titulo' => ['required', 'min:3', 'max:255'],
        'dataInicio' => ['required', 'date'],
        'dataFim' => ['required', 'date'],
        'local' => ['required', 'min:2', 'max:255'],
        'descricao' => ['nullable', 'min:3'],
        'curso' => ['nullable', 'min:3'],
        ]);
        
        Evento::create($dados);
        
        return redirect()->route('eventos.index')->with('sucesso', 'Evento cadastrado com sucesso!');
    }

    // Mostra os detalhes específicos de um evento
    public function show(Evento $evento)
    {
        return view('eventos.show', compact('evento'));
    }

    // Edita os detalhes de um evento
    public function edit(Evento $evento)
    {
        return view('eventos.edit', compact('evento'));
    }

    // Atualiza os dados do evento no banco
    public function update(Request $request, Evento $evento)
    {
        $dados = $request->validate([
        'titulo' => ['required', 'min:3', 'max:255'],
        'dataInicio' => ['required', 'date'],
        'dataFim' => ['required', 'date'],
        'local' => ['required', 'min:2', 'max:255'],
        'descricao' => ['nullable', 'min:3'],
        'curso' => ['nullable', 'min:3'],
        ]);

        $evento->update($dados);

        return redirect()->route('eventos.index')->with('sucesso', 'Evento atualizado com sucesso!');
    }

    // Remove um determinando evento do banco
    public function destroy(Evento $evento)
    {
        $evento->delete();
        
        return redirect()->route('eventos.index')->with('sucesso', 'Evento removido com sucesso!');
    }
}
