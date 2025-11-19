@extends('layouts.app')

@section('title', 'Sistema de Palestras - Público')

@section('content')
<div class="my-4">
    <h1 class="h3 mb-3">Sistema de Palestras da Fatec Prudente</h1>

    <p class="text-muted">
        Esta é a área pública do sistema, que será implementada na próxima aula com os alunos.
    </p>

    <div class="row g-3 mt-2">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Eventos</h5>
                    <p class="card-text text-muted small">
                        Listagem pública dos eventos cadastrados no sistema.
                    </p>
                    <a href="{{ route('site.eventos') }}" class="btn btn-outline-primary mt-auto">
                        Ver eventos
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Palestras</h5>
                    <p class="card-text text-muted small">
                        Lista de palestras abertas para participação dos alunos.
                    </p>
                    <a href="{{ route('site.palestras') }}" class="btn btn-outline-primary mt-auto">
                        Ver palestras
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Inscrição em Palestra</h5>
                    <p class="card-text text-muted small">
                        Área para o aluno se inscrever utilizando RA e senha.
                    </p>
                    <a href="{{ route('site.inscricao') }}" class="btn btn-outline-success mt-auto">
                        Fazer inscrição
                    </a>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <p class="small text-muted">
        <strong>Atividade para os alunos:</strong> nesta área pública, eles irão implementar
        as consultas de eventos/palestras e o fluxo de inscrição.
    </p>
</div>
@endsection
