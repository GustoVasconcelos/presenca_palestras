@extends('layouts.app')
@section('title', 'Eventos')
@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1 class="h3 mb-0">Eventos</h1>
        <a class="btn btn-primary" href="{{ route('eventos.create') }}">
            <i class="bi bi-plus-circle"></i> Novo Evento
        </a>
    </div>
@if($eventos->isEmpty())
    <div class="alert alert-secondary">Nenhum evento cadastrado.</div>
@else
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead class="table-light">
                <tr>
                    <th>Título</th>
                    <th>Data de Início</th>
                    <th>Data de Término</th>
                    <th>Local</th>
                    <th>Curso</th>
                    <th class="text-end">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($eventos as $e)
                <tr>
                    <td class="fw-medium">{{ $e->titulo }}</td>
                    <td>{{ optional($e->dataInicio)->format('d/m/Y H:i') }}</td>
                    <td>{{ optional($e->dataFim)->format('d/m/Y H:i') }}</td>
                    <td>{{ $e->local }}</td>
                    <td>{{ $e->curso->nome ?? 'Sem curso' }}</td>
                    <td class="text-end">
                            <a class="btn btn-sm btn-outline-secondary" href="{{ route('eventos.edit', $e) }}">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>
                            <a class="btn btn-sm btn-outline-secondary" href="{{ route('eventos.show', $e) }}">
                                <i class="bi bi-pencil-square"></i> Detalhes
                            </a>
                        <form action="{{ route('eventos.destroy', $e) }}" method="POST" class="d-inline" onsubmit="return confirm('Excluir esta palestra?');">
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
