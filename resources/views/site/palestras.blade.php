@extends('layouts.app')

@section('title', 'Palestras - Público')

@section('content')
<div class="my-4">
    <h1 class="h4 mb-3">Palestras Disponíveis</h1>

    <p class="text-muted">
        Nesta tela, os alunos irão implementar a listagem pública de palestras,
        relacionando com eventos e palestrantes.
    </p>

    <div class="alert alert-info">
        <strong>Atividade:</strong> montar uma consulta que exiba título da palestra, palestrante,
        evento (se houver), data e local.
    </div>

    <div class="card">
        <div class="card-header">Estrutura sugerida (exemplo)</div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Título</th>
                            <th>Palestrante</th>
                            <th>Evento</th>
                            <th>Data</th>
                            <th>Local</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Palestra Exemplo</td>
                            <td>Prof. Exemplo</td>
                            <td>Evento Exemplo</td>
                            <td>00/00/0000 00:00</td>
                            <td>Auditório</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-center text-muted">
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
