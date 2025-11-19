{{-- Desenvolvido pelos alunos: Bruno e Enzo --}}
@extends('layouts.app')

@section('title', 'Detalhes do Palestrante')

@section('content')
<div class="row my-4">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header">
                Detalhes do palestrante
            </div>
            <div class="card-body">
                <p><strong>Nome:</strong> {{ $palestrante->nome }}</p>
                <p><strong>Email:</strong> {{ $palestrante->email }}</p>
                <p><strong>Telefone:</strong> {{ $palestrante->telefone ?? '-' }}</p>
                <p><strong>Especialidade:</strong> {{ $palestrante->especialidade ?? '-' }}</p>
            </div>
            <div class="card-footer d-flex gap-2">
                <a href="{{ route('palestrantes.edit', $palestrante) }}" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-pencil-square"></i> Editar
                </a>
                <a href="{{ route('palestrantes.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left-circle"></i> Voltar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
