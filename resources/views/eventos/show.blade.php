@extends('layouts.app')
@section('title', 'Detalhes do Evento')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Detalhes do Evento</div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Título</dt>
                            <dd class="col-sm-9">{{ $evento->titulo }}</dd>
                            <dt class="col-sm-3">Data de Início</dt>
                            <dd class="col-sm-9">{{ optional($evento->dataInicio)->format('d/m/Y H:i') }}</dd>
                            <dt class="col-sm-3">Data de Término</dt>
                            <dd class="col-sm-9">{{ optional($evento->dataFim)->format('d/m/Y H:i') }}</dd>
                            <dt class="col-sm-3">Local</dt>
                            <dd class="col-sm-9">{{ $evento->local }}</dd>
                            <dt class="col-sm-3">Descrição</dt>
                            <dd class="col-sm-9">{{ $evento->descricao }}</dd>
                            <dt class="col-sm-3">Curso</dt>
                            <dd class="col-sm-9">{{ $evento->curso->nome }}</dd>
                        </dl>
                        <a class="btn btn-outline-secondary" href="{{ route('eventos.index') }}">
                            <i class="bi bi-arrow-left"></i>Voltar
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
