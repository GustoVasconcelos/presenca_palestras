@extends('layouts.app')

@section('title', 'Painel de Controle')

@section('content')
<div class="my-4">
    <h1 class="h3 mb-3">Painel de Controle</h1>
    <p class="text-muted">
        Bem-vindo, <strong>{{ session('admin_nome') }}</strong>! Escolha uma das opções abaixo para gerenciar o sistema.
    </p>

    <div class="row g-3 mt-2">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Cursos</h5>
                        <span class="badge bg-primary">{{ $totais['cursos'] }}</span>
                    </div>
                    <p class="card-text text-muted small">
                        Gerencie os cursos disponíveis para matrícula dos alunos.
                    </p>
                    <a href="{{ route('cursos.index') }}" class="btn btn-outline-primary mt-auto">
                        <i class="bi bi-journal-text"></i> Gerenciar Cursos
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Alunos</h5>
                        <span class="badge bg-primary">{{ $totais['alunos'] }}</span>
                    </div>
                    <p class="card-text text-muted small">
                        Cadastro e gestão dos alunos participantes das palestras.
                    </p>
                    <a href="{{ route('alunos.index') }}" class="btn btn-outline-primary mt-auto">
                        <i class="bi bi-people"></i> Gerenciar Alunos
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Palestrantes</h5>
                        <span class="badge bg-primary">{{ $totais['palestrantes'] }}</span>
                    </div>
                    <p class="card-text text-muted small">
                        Cadastro de palestrantes que ministram os eventos na Fatec.
                    </p>
                    <a href="{{ route('palestrantes.index') }}" class="btn btn-outline-primary mt-auto">
                        <i class="bi bi-mic"></i> Gerenciar Palestrantes
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Eventos</h5>
                        <span class="badge bg-primary">{{ $totais['eventos'] }}</span>
                    </div>
                    <p class="card-text text-muted small">
                        Organização dos eventos de palestras por curso e período.
                    </p>
                    <a href="{{ route('eventos.index') }}" class="btn btn-outline-primary mt-auto">
                        <i class="bi bi-calendar-event"></i> Gerenciar Eventos
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Palestras</h5>
                        <span class="badge bg-primary">{{ $totais['palestras'] }}</span>
                    </div>
                    <p class="card-text text-muted small">
                        Cadastro de palestras vinculadas a palestrantes e eventos.
                    </p>
                    <a href="{{ route('palestras.index') }}" class="btn btn-outline-primary mt-auto">
                        <i class="bi bi-easel"></i> Gerenciar Palestras
                    </a>
                </div>
            </div>
        </div>

        {{-- Gerenciar Admins --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-warning">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Admins</h5>
                    </div>
                    <p class="card-text text-muted small">
                        Controle de usuários administradores com acesso ao painel.
                    </p>
                    <a href="{{ route('admins.index') }}" class="btn btn-outline-warning mt-auto">
                        <i class="bi bi-person-gear"></i> Gerenciar Admins
                    </a>
                </div>
            </div>
        </div>

        {{-- Registrar Presença --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-success">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-2">Registrar Presença</h5>
                    <p class="card-text text-muted small">
                        Tela para registrar presença de alunos inscritos em palestras
                        através do RA. (Implementação pelos alunos.)
                    </p>
                    <a href="{{ route('dashboard.registrar_presenca') }}" class="btn btn-outline-success mt-auto">
                        <i class="bi bi-clipboard-check"></i> Abrir Registro de Presença
                    </a>
                </div>
            </div>
        </div>

        {{-- Lista de Inscritos em Palestra --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-info">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-2">Lista de Inscritos</h5>
                    <p class="card-text text-muted small">
                        Tela para emitir a lista de inscritos em uma palestra.
                        (Implementação pelos alunos.)
                    </p>
                    <a href="{{ route('dashboard.lista_inscritos') }}" class="btn btn-outline-info mt-auto">
                        <i class="bi bi-list-ul"></i> Abrir Lista de Inscritos
                    </a>
                </div>
            </div>
        </div>

        {{-- Lista de Presentes --}}
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-secondary">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-2">Lista de Presentes</h5>
                    <p class="card-text text-muted small">
                        Tela para emitir a lista de participantes que tiveram presença
                        registrada em uma palestra. (Implementação pelos alunos.)
                    </p>
                    <a href="{{ route('dashboard.lista_presencas') }}" class="btn btn-outline-secondary mt-auto">
                        <i class="bi bi-people-check"></i> Abrir Lista de Presentes
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
