@extends('layouts.app')

@section('title', 'Novo Admin')

@section('content')
<div class="row my-4">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header">Cadastrar Administrador</div>
            <div class="card-body">
                <form action="{{ route('admins.store') }}" method="POST" class="vstack gap-3">
                    @include('admins._form')

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle"></i> Salvar
                        </button>
                        <a href="{{ route('admins.index') }}" class="btn btn-outline-secondary">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
