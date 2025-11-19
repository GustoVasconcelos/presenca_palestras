@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')
    <div class="card">
        <div class="card-header">
            Detalhes do Aluno: <strong>{{ $aluno->nome }}</strong>
        </div>
        <div class="card-body">
            <h2 class="h4 mb-4">{{ $aluno->nome }} (RA: {{ $aluno->ra }})</h2>

            <p><strong>Nome:</strong> {{ $aluno->nome }}</p>
            <p><strong>RA:</strong> {{ $aluno->ra }}</p>
            <p><strong>E-mail:</strong> {{ $aluno->email }}</p>
            <p><strong>Sexo:</strong> {{ $aluno->sexo }}</p>

            <p><strong>Curso:</strong> {{ $aluno->curso->nome ?? 'Curso não encontrado' }}</p>

            <p><strong>Módulo:</strong> {{ $aluno->modulo }}</p>

            <p><strong>Data de Nascimento:</strong>
                {{ optional($aluno->data_nasc)->format('d/m/Y') }}
            </p>
        </div>
        <div class="card-footer d-flex gap-2">
            <a class="btn btn-sm btn-outline-secondary" href="{{ route('alunos.edit', $aluno) }}">
                <i class="bi bi-pencil-square"></i> Editar
            </a>
            <a class="btn btn-outline-secondary" href="{{ route('alunos.index') }}">
                <i class="bi bi-arrow-left-circle"></i> Voltar
            </a>
        </div>
    </div>
@endsection
