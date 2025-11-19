{{-- Desenvolvido pelos alunos: Bruno e Enzo --}}
@extends('layouts.app')

@section('title', 'Palestrantes')

@section('content')
<div class="d-flex justify-content-between align-items-center my-4">
    <h3 class="m-0">Palestrantes</h3>
    <div>
        <a href="{{ route('palestrantes.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Novo</a>
    </div>
</div>

@if(session('sucesso'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('sucesso') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Especialidade</th>
                        <th class="text-end">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($palestrantes as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nome }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->telefone }}</td>
                        <td>{{ $p->especialidade }}</td>
                        <td class="text-end">
                            <a href="{{ route('palestrantes.show', $p) }}" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-eye"></i>
                            </a>

                            <a href="{{ route('palestrantes.edit', $p->id) }}" class="btn btn-sm btn-outline-warning">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form action="{{ route('palestrantes.destroy', $p->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Deseja excluir este palestrante?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center py-4">Nenhum palestrante cadastrado.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
