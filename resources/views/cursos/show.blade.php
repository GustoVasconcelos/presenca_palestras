@extends('layouts.app')
@section('title', 'Detalhes do Curso')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">Detalhes do curso</div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Nome</dt>
                    <dd class="col-sm-9">{{ $curso->nome }}</dd>

                    <dt class="col-sm-3">Descrição</dt>
                    <dd class="col-sm-9">{{ $curso->descricao }}</dd>

                    <dt class="col-sm-3">Carga Horária</dt>
                    <dd class="col-sm-9">{{ $curso->carga_horaria }}</dd>

                    <dt class="col-sm-3">Instrutor</dt>
                    <dd class="col-sm-9">{{ $curso->instrutor }}</dd>

                    <dt class="col-sm-3">Categoria</dt>
                    <dd class="col-sm-9">{{ $curso->categoria }}</dd>

                    <dt class="col-sm-3">Data de Início</dt>
                    <dd class="col-sm-9">{{ $curso->data_inicio }}</dd>

                    <dt class="col-sm-3">Data de Fim</dt>
                    <dd class="col-sm-9">{{ $curso->data_fim }}</dd>
                </dl>
                <a class="btn btn-outline-secondary" href="{{route('cursos.index') }}">
                    <i class="bi bi-arrow-left"></i> Voltar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
