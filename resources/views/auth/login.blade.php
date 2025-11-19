@extends('layouts.app')

@section('title', 'Acesso ao Painel')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-5">
        <div class="card shadow-sm">
            <div class="card-header text-center">
                <h5 class="mb-0">Acesso ao Painel de Controle</h5>
            </div>
            <div class="card-body">
                <p class="text-muted small">
                    Use o usuário padrão <strong>admin</strong> / <strong>admin</strong> no primeiro acesso.
                </p>

                <form method="POST" action="{{ route('login.do') }}" class="vstack gap-3">
                    @csrf

                    <div>
                        <label class="form-label">Login</label>
                        <input type="text" name="login" class="form-control"
                               value="{{ old('login') }}" autofocus>
                    </div>

                    <div>
                        <label class="form-label">Senha</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="d-grid gap-2 mt-2">
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-box-arrow-in-right"></i> Entrar
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted small text-center">
                Sistema de Controle de Palestras – Fatec Prudente
            </div>
        </div>
    </div>
</div>
@endsection
