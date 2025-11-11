<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Curso;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    // Listar
    public function index()
    {
        /* $eventos = Evento::orderBy('dataInicio', 'desc')->get(); */
        // Use ::with('curso') para carregar o relacionamento e evitar N+1 queries
        $eventos = Evento::with('curso')->orderBy('dataInicio', 'desc')->get(); // <-- MUDANÇA AQUI
        return view('eventos.index', compact('eventos'));
    }

    // Criar Eventom (Form)
    public function create()
    {
        $cursos = Curso::orderBy('nome')->get();
        return view('eventos.create', compact('cursos'));
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
        // 'curso' => ['nullable', 'min:1'],
        'curso_id' => ['nullable', 'exists:cursos,id'],
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
        $cursos = Curso::orderBy('nome')->get();
        return view('eventos.edit', compact('evento', 'cursos'));
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
        // 'curso' => ['nullable', 'min:1'],
        'curso_id' => ['nullable', 'exists:cursos,id'],
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
