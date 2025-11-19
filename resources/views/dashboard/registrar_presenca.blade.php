@extends('layouts.app')

@section('title', 'Registrar Presença')

@section('content')
<div class="my-4">
    <h1 class="h4 mb-3">Registrar Presença em Palestra</h1>
    <p class="text-muted">
        Esta tela será implementada pelos alunos. A ideia é:
    </p>
    <ul>
        <li>Digitar o <strong>RA</strong> do aluno;</li>
        <li>Selecionar ou informar a <strong>palestra</strong> em que a presença será registrada;</li>
        <li>Confirmar o registro, gravando no banco de dados a presença.</li>
    </ul>

    <div class="alert alert-info">
        <strong>Atividade para os alunos:</strong> implementar a lógica de busca do aluno por RA,
        validação se há inscrição na palestra escolhida e gravação da presença.
    </div>

    <form class="vstack gap-3 mt-3">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">RA do aluno</label>
                <input type="text" class="form-control" placeholder="Ex: 123456">
            </div>
            <div class="col-md-8">
                <label class="form-label">Palestra</label>
                <select class="form-select">
                    <option value="">Selecione uma palestra (mock)</option>
                </select>
            </div>
        </div>

        <button type="button" class="btn btn-success" disabled>
            <i class="bi bi-clipboard-check"></i> Registrar (pendente de implementação)
        </button>
    </form>
</div>
@endsection
