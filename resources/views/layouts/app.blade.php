<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Presença')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { padding-top: 4.5rem; }
        .form-error { color:#b02a37; font-size: .875rem; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('eventos.index') }}">Presenças • Eventos</a>
            <button class="navbar-toggler" type="button" data-bstoggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="mainNav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('eventos.index') }}">
                            <i class="bi bi-list-ul"></i>Listar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('eventos.create') }}">
                            <i class="bi bi-plus-circle"></i>Novo
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        @if(session('sucesso'))
            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                <i class="bi bi-check-circle"></i> {{ session('sucesso') }}
                <button type="button" class="btn-close" data-bsdismiss="alert"></button>
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