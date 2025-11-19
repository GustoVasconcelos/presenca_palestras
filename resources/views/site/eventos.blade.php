@extends('layouts.app')

@section('title', 'Eventos - Público')

@section('content')
<div class="my-4">
    <h1 class="h4 mb-3">Eventos Disponíveis</h1>

    <p class="text-muted">
        Nesta tela, os alunos irão implementar a listagem pública de eventos,
        consumindo os dados da tabela <code>eventos</code>.
    </p>

    <div class="alert alert-info">
        <strong>Atividade:</strong> carregar do banco a lista de eventos (com curso, datas e local)
        e exibi-la em uma tabela ou cards.
    </div>

    <div class="card">
        <div class="card-header">Estrutura sugerida (exemplo)</div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Título</th>
                            <th>Curso</th>
                            <th>Período</th>
                            <th>Local</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Evento Exemplo</td>
                            <td>ADS</td>
                            <td>00/00/0000 a 00/00/0000</td>
                            <td>Auditório Fatec</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                Substituir por dados reais na implementação.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
