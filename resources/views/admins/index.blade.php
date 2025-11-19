@extends('layouts.app')

@section('title', 'Administradores')

@section('content')
<div class="d-flex justify-content-between align-items-center my-4">
    <h1 class="h4 m-0">Administradores do Sistema</h1>
    <a href="{{ route('admins.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Novo Admin
    </a>
</div>

@if($admins->isEmpty())
    <div class="alert alert-secondary">Nenhum administrador cadastrado.</div>
@else
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Login</th>
                            <th>Nome completo</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            <td class="fw-medium">{{ $admin->login }}</td>
                            <td>{{ $admin->nome_completo }}</td>
                            <td class="text-end">
                                <a href="{{ route('admins.edit', $admin) }}"
                                   class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="{{ route('admins.destroy', $admin) }}"
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Excluir este administrador?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger"
                                            @if($admin->login === 'admin') disabled @endif>
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif
@endsection
