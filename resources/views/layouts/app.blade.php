<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Presença')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { padding-top: 4.5rem; }
        .form-error { color: #b02a37; font-size: .875rem; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('site.index') }}">Presenças • Fatec Prudente</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="mainNav" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                @if(session('admin_id'))
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Painel</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('cursos.index') }}">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('alunos.index') }}">Alunos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('palestrantes.index') }}">Palestrantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('eventos.index') }}">Eventos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('palestras.index') }}">Palestras</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admins.index') }}">Admins</a></li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button class="btn btn-link nav-link" type="submit">
                                Sair ({{ session('admin_nome') }})
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.eventos') }}">Eventos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.palestras') }}">Palestras</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.inscricao') }}">Inscrição</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Entrar</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<main class="container">
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('sucesso'))
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            <i class="bi bi-check-circle"></i> {{ session('sucesso') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @yield('content')
</main>

<footer class="border-top mt-5 py-3">
    <div class="container text-muted small">
        Fatec Prudente – Programação Web (Laravel)
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
