@extends('layouts.app')
@section('title', 'Palestras')
@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 mb-0">Palestras</h1>
    <a class="btn btn-primary" href="{{ route('palestras.create') }}">
        <i class="bi bi-plus-circle"></i> Nova Palestra
    </a>
 </div>
@if($palestras->isEmpty())
<div class="alert alert-secondary">Nenhuma palestra cadastrada.</div>
@else
<div class="table-responsive">
    <table class="table table-striped align-middle">
        <thead class="table-light">
            <tr>
                <th>Título</th>
                <th>Palestrante</th>
                <th>Data</th>
                <th>Local</th>
                <th class="text-end">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($palestras as $p)
            <tr>
                <td class="fw-medium">{{ $p->titulo }}</td>
                <td>{{ $p->palestrante }}</td>
                <td>{{ optional($p->data)->format('d/m/Y H:i') }}</td>
                <td>{{ $p->local }}</td>
                <td class="text-end">
                        <a class="btn btn-sm btn-outline-secondary" href="{{ route('palestras.edit', $p) }}">
                            <i class="bi bi-pencil-square"></i> Editar
                        </a>
                    <form action="{{ route('palestras.destroy', $p) }}" method="POST" class="d-inline" onsubmit="return confirm('Excluir esta palestra?');">
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
