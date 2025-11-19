@extends('layouts.app')

@section('title', 'Inscrição em Palestra')

@section('content')
<div class="my-4">
    <h1 class="h4 mb-3">Inscrição em Palestra</h1>

    <p class="text-muted">
        Nesta tela, os alunos irão implementar o fluxo de inscrição em palestra,
        mediante digitação de <strong>RA</strong> e <strong>senha</strong> do aluno.
    </p>

    <div class="alert alert-info">
        <strong>Atividade:</strong> validar RA/senha com a tabela de alunos, permitir a escolha
        de uma palestra e registrar a inscrição em uma tabela de relacionamento.
    </div>

    <form class="vstack gap-3 mt-3">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">RA</label>
                <input type="text" class="form-control" placeholder="Digite seu RA">
            </div>
            <div class="col-md-4">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" placeholder="Senha do aluno">
            </div>
            <div class="col-md-4">
                <label class="form-label">Palestra</label>
                <select class="form-select">
                    <option value="">Selecione uma palestra (mock)</option>
                </select>
            </div>
        </div>

        <button type="button" class="btn btn-success" disabled>
            Confirmar inscrição (pendente de implementação)
        </button>
    </form>
</div>
@endsection
