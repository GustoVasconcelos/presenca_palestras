{{-- Desenvolvido pelos alunos: Bruno e Enzo --}}
@extends('layouts.app')

@section('title', 'Editar Palestrante')

@section('content')
<div class="row my-4">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header p-3">Editar Palestrante</div>
            <div class="card-body">
                <form action="{{ route('palestrantes.update', $palestrante->id) }}" method="POST">
                    @method('PUT')
                    @include('palestrantes._form')

                    <div class="d-flex gap-2">
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-check2"></i> Atualizar
                        </button>
                        <a href="{{ route('palestrantes.index') }}" class="btn btn-secondary">
                            Voltar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
