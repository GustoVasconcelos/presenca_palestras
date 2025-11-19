{{-- Desenvolvido pelos alunos: João Pedro e João Victor --}}
@extends('layouts.app')

@section('title', 'Detalhes da Palestra')

@section('content')

<div class="row">
    <div class="col-lg-8">

        <div class="card">
            <div class="card-header">Detalhes da Palestra</div>

            <div class="card-body">

                <dl class="row">
                    <dt class="col-sm-3">Título</dt>
                    <dd class="col-sm-9">{{ $palestra->titulo }}</dd>

                    <dt class="col-sm-3">Palestrante</dt>
                    <dd class="col-sm-9">{{ $palestra->palestrante->nome }}</dd>

                    <dt class="col-sm-3">Evento</dt>
                    <dd class="col-sm-9">{{ $palestra->evento->titulo ?? '-' }}</dd>

                    <dt class="col-sm-3">Data</dt>
                    <dd class="col-sm-9">{{ $palestra->data?->format('d/m/Y H:i') }}</dd>

                    <dt class="col-sm-3">Local</dt>
                    <dd class="col-sm-9">{{ $palestra->local }}</dd>

                    <dt class="col-sm-3">Descrição</dt>
                    <dd class="col-sm-9">{{ $palestra->descricao ?? '-' }}</dd>
                </dl>

            </div>

            <div class="card-footer d-flex gap-2">
                <a class="btn btn-outline-primary" href="{{ route('palestras.edit', $palestra) }}">
                    <i class="bi bi-pencil"></i> Editar
                </a>
                <a class="btn btn-secondary" href="{{ route('palestras.index') }}">
                    <i class="bi bi-arrow-left"></i> Voltar
                </a>
            </div>

        </div>

    </div>
</div>

@endsection
