{{-- Desenvolvido pelos alunos: Bruno e Enzo --}}
@extends('layouts.app')

@section('title', 'Cadastrar Palestrante')

@section('content')
<div class="row my-4">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header p-3">Cadastrar Palestrante</div>
            <div class="card-body">
                <form action="{{ route('palestrantes.store') }}" method="POST">
                    @include('palestrantes._form', ['palestrante' => $palestrante ?? null])

                    <div class="d-flex gap-2">
                        <button class="btn btn-success" type="submit">
                            <i class="bi bi-save"></i> Salvar
                        </button>
                        <a href="{{ route('palestrantes.index') }}" class="btn btn-secondary">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
