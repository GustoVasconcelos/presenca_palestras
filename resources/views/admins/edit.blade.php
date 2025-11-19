@extends('layouts.app')

@section('title', 'Editar Admin')

@section('content')
<div class="row my-4">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header">Editar Administrador</div>
            <div class="card-body">
                <form action="{{ route('admins.update', $admin) }}" method="POST" class="vstack gap-3">
                    @csrf
                    @method('PUT')

                    @include('admins._form', ['admin' => $admin])

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle"></i> Atualizar
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
