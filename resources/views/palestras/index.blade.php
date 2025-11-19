{{-- Desenvolvido pelos alunos: João Pedro e João Victor --}}
@extends('layouts.app')

@section('title', 'Palestras')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 mb-0">Palestras</h1>

    <a class="btn btn-primary" href="{{ route('palestras.create') }}">
        <i class="bi bi-plus-circle"></i> Nova Palestra
    </a>
</div>

@if(session('sucesso'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('sucesso') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if($palestras->isEmpty())
    <div class="alert alert-secondary">Nenhuma palestra cadastrada.</div>
@else

<div class="table-responsive">
    <table class="table table-striped align-middle">
        <thead class="table-light">
            <tr>
                <th>Título</th>
                <th>Palestrante</th>
                <th>Evento</th>
                <th>Data</th>
                <th>Local</th>
                <th class="text-end">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($palestras as $p)
            <tr>
                <td class="fw-medium">{{ $p->titulo }}</td>
                <td>{{ $p->palestrante->nome }}</td>
                <td>{{ $p->evento->titulo ?? '-' }}</td>
                <td>{{ $p->data?->format('d/m/Y H:i') }}</td>
                <td>{{ $p->local }}</td>

                <td class="text-end">
                    <a href="{{ route('palestras.show', $p) }}" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ route('palestras.edit', $p) }}" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i>
                    </a>

                    <form action="{{ route('palestras.destroy', $p) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Deseja excluir essa palestra?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i>
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
