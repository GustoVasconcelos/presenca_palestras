@extends('layouts.app')
@section('title', 'Editar Evento')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Editar Evento</div>
                <div class="card-body">
                    <form action="{{ route('eventos.update', $evento) }}" method="POST" class="vstack gap-3">
                        @csrf
                        @method('PUT')
                        @include('eventos._form', ['evento' => $evento])
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-circle"></i> Atualizar
                            </button>
                            <a class="btn btn-outline-secondary" href="{{ route('eventos.index') }}">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
