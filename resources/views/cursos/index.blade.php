@extends('layouts.app')

@section('title', 'Curso')

@section('content')

<div class="d-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0">Curso</h1>

    <a class="btn btn-primary" href="{{ route('cursos.create') }}">
        <i class="bi bi-plus-circle"></i> Novo Curso
    </a>
</div>

@if($cursos->isEmpty())
    <div class="alert alert-secondary">
        Nenhum curso cadastrado.
    </div>
@else
<div class="table-responsive">
    <table class="table table-striped align-middle">
        <thead class="table-light">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Carga Horária</th>
            <th>Instrutor</th>
            <th>Categoria</th>
            <th>Data Início</th>
            <th>Data Fim</th>
            <th class="text-end">Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cursos as $p)
            <tr>
                <td class="fw-medium">{{ $p->nome }}</td>
                <td>{{ $p->descricao }}</td>
                <td>{{ $p->carga_horaria }}</td>
                <td>{{ $p->instrutor }}</td>
                <td>{{ $p->categoria }}</td>
                <td>{{ $p->data_inicio ? \Carbon\Carbon::parse($p->data_inicio)->format('d/m/Y') : '-' }}</td>
                <td>{{ $p->data_fim ? \Carbon\Carbon::parse($p->data_fim)->format('d/m/Y') : '-' }}</td>

                <td class="text-end">
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('cursos.edit', $p) }}">
                        <i class="bi bi-pencil-square"></i> Editar
                    </a>

                    <form action="{{ route('cursos.destroy', $p) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Excluir este curso?');">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm btn-outline-danger" type="submit">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endif

@endsection
