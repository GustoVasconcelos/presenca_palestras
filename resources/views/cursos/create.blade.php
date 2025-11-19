@extends('layouts.app')

@section('title', 'Novo Curso')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">Cadastrar Curso</div>

            <div class="card-body">
                <form action="{{ route('cursos.store') }}" method="POST" class="vstack gap-3">
                    @include('cursos._form')

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle"></i> Salvar
                        </button>

                        <a class="btn btn-outline-secondary" href="{{ route('cursos.index') }}">
                            Cancelar
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection
