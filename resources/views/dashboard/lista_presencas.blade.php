@extends('layouts.app')

@section('title', 'Lista de Presentes')

@section('content')
<div class="my-4">
    <h1 class="h4 mb-3">Lista de Presentes em Palestra</h1>

    <p class="text-muted">
        Esta tela será implementada pelos alunos. A ideia é:
    </p>
    <ul>
        <li>Selecionar uma <strong>palestra</strong>;</li>
        <li>Consultar no banco os alunos que tiveram presença registrada;</li>
        <li>Exibir em tabela, possivelmente com data/hora do registro da presença;</li>
        <li>Permitir relatório para emissão de certificados, etc.</li>
    </ul>

    <div class="alert alert-info">
        <strong>Atividade para os alunos:</strong> implementar a consulta das presenças e o relacionamento
        com inscrições e palestras.
    </div>

    <form class="row g-2 mb-3">
        <div class="col-md-8">
            <label class="form-label">Palestra</label>
            <select class="form-select">
                <option value="">Selecione uma palestra (mock)</option>
            </select>
        </div>
        <div class="col-md-4 d-flex align-items-end">
            <button type="button" class="btn btn-primary w-100" disabled>
                Buscar presentes (pendente de implementação)
            </button>
        </div>
    </form>

    <div class="card">
        <div class="card-header">Presentes (exemplo de estrutura)</div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table mb-0 table-striped align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>RA</th>
                            <th>Nome</th>
                            <th>Curso</th>
                            <th>Horário de registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>000000</td>
                            <td>Aluno Exemplo</td>
                            <td>ADS</td>
                            <td>00/00/0000 00:00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                Dados reais serão carregados via implementação feita pelos alunos.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
