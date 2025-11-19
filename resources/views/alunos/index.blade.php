@extends('layouts.app') 
@section('title', 'Lista de Alunos') 

@section('content')
    @if(session('sucesso'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('sucesso') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1 class="h3 mb-0">Alunos</h1>
        <a class="btn btn-primary" href="{{ route('alunos.create') }}">
            <i class="bi bi-plus-circle"></i> Novo Aluno
        </a>
    </div>

    <form method="GET" action="{{ route('alunos.index') }}" class="mb-4">
        <div class="input-group">
            <select class="form-select" name="curso_id">
                <option value="">Todos os Cursos</option>
                @php 
                    $cursoSelecionado = request('curso_id');
                @endphp
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ $curso->id == $cursoSelecionado ? 'selected' : '' }}>
                        {{ $curso->nome }}
                    </option>
                @endforeach
            </select>
            <button class="btn btn-outline-secondary" type="submit">Filtrar</button>
            @if($cursoSelecionado)
                <a href="{{ route('alunos.index') }}" class="btn btn-outline-danger">Limpar Filtro</a>
            @endif
        </div>
    </form>

    @if($alunos->isEmpty())
        <div class="alert alert-secondary">Nenhum aluno cadastrado.</div> 
    @else 
        <div class="table-responsive">
            <table class="table table-striped align-middle"> 
                <thead class="table-light"> 
                    <tr> 
                        <th>RA</th> 
                        <th>Nome</th> 
                        <th>Curso</th> 
                        <th>Módulo</th> 
                        <th class="text-end">Ações</th> 
                    </tr> 
                </thead> 
                <tbody> 
                @foreach($alunos as $aluno) 
                    <tr> 
                        <td class="fw-medium">{{ $aluno->ra }}</td> 
                        <td>{{ $aluno->nome }}</td> 
                        <td>{{ $aluno->curso->nome ?? 'N/A' }}</td> 
                        <td>{{ $aluno->modulo }}</td> 
                        <td class="text-end"> 
                            <a class="btn btn-sm btn-outline-secondary" href="{{ route('alunos.show', $aluno) }}">
                                <i class="bi bi-three-dots"></i> Detalhes</a>

                            <a class="btn btn-sm btn-outline-secondary" href="{{ route('alunos.edit', $aluno) }}">
                                <i class="bi bi-pencil-square"></i> Editar</a>

                            <form action="{{ route('alunos.destroy', $aluno) }}" method="POST" class="d-inline" 
                                onsubmit="return confirm('Excluir o aluno {{ $aluno->nome }} (RA: {{ $aluno->ra }})?');">
                                @csrf 
                                @method('DELETE') 
                                <button class="btn btn-sm btn-outline-danger" type="submit"> 
                                    <i class="bi bi-trash"></i> Excluir</button> 
                            </form> 
                        </td> 
                    </tr> 
                @endforeach 
                </tbody> 
            </table>
        </div> 
    @endif 
@endsection
