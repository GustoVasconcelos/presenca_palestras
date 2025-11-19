@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Editar Aluno: {{ $aluno->nome }}</div>
                <div class="card-body">
                    <form action="{{ route('alunos.update', $aluno) }}" method="POST" class="vstack gap-3">
                        @csrf
                        @method('PUT')

                        @include('alunos._form', ['aluno' => $aluno, 'cursos' => $cursos])

                        <div class="d-flex gap-2 mt-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-circle"></i> Atualizar Aluno
                            </button>
                            <a class="btn btn-outline-secondary" href="{{ route('alunos.index') }}">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
