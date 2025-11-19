@extends('layouts.app')
@section('title', 'Editar Curso')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">Editar Curso</div>
            <div class="card-body">
                <form action="{{ route('cursos.update', $curso) }}"
                      method="POST" class="vstack gap-3">
                    @csrf
                    @method('PUT')
                    @include('cursos._form', ['curso' => $curso])
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle"></i> Atualizar
                        </button>
                        <a class="btn btn-outline-secondary" href="{{route('cursos.index') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
