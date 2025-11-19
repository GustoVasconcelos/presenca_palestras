@extends('layouts.app')

@section('title', 'Eventos - Público')

@section('content')
<div class="my-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Eventos Disponíveis</h1>
    </div>

    @if($eventos->isEmpty())
        <div class="alert alert-info d-flex align-items-center" role="alert">
            <i class="bi bi-info-circle-fill me-2"></i>
            <div>
                <strong>Nenhum evento ativo no momento.</strong>
                <br>Fique atento, novos eventos serão cadastrados em breve!
            </div>
        </div>
    @else
            <!-- 
            GRID SYSTEM:
            row-cols-1: 1 card por linha em celulares
            row-cols-md-2: 2 cards por linha em tablets
            row-cols-lg-3: 3 cards por linha em desktops
            g-4: Espaçamento (gap) entre os cards
            -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($eventos as $e)
            <div class="col">
                <div class="card h-100 shadow-sm hover-shadow transition overflow-hidden">
                    
                    <!-- BANNER DO EVENTO -->
                    <div class="position-relative">
                        <!-- Lógica: Se tem banner, usa ele. Se não, usa o placeholder -->
                        <img src="{{ $e->banner ? $e->banner : 'https://placehold.co/600x400/EEE/31343C?text=Fatec' }}" 
                            class="card-img-top" 
                            alt="{{ $e->titulo }}" 
                            style="height: 200px; object-fit: cover;"
                            {{-- Dica: adicionar onerror caso o link quebre --}}
                            onerror="this.onerror=null;this.src='https://placehold.co/600x400/EEE/31343C?text=Erro+Imagem';"
                        >
                        
                        <!-- Badge do Curso -->
                        <div class="position-absolute top-0 end-0 m-2">
                            @if($e->curso)
                                <span class="badge bg-primary shadow-sm">{{ $e->curso->nome }}</span>
                            @else
                                <span class="badge bg-success shadow-sm">Geral</span>
                            @endif
                        </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title text-truncate" title="{{ $e->titulo }}">
                            {{ $e->titulo }}
                        </h5>
                        
                        <p class="card-text text-muted small mb-3">
                            {{ Str::limit($e->descricao, 80, '...') }}
                        </p>
                        
                        <!-- Resto do card igual... -->
                        <ul class="list-unstyled small text-secondary mb-0">
                            <li class="mb-1">
                                <i class="bi bi-calendar-event me-1 text-primary"></i>
                                {{ optional($e->dataInicio)->format('d/m/Y \à\s H:i') }}
                            </li>
                            <li class="mb-1">
                                <i class="bi bi-geo-alt me-1 text-danger"></i>
                                {{ $e->local }}
                            </li>
                        </ul>
                    </div>
                    
                    <div class="card-footer bg-white border-top-0 pb-3">
                        <!-- Definir para qual rota ira o Ver Detalhes do evento -->
                        <a href="{{ route('eventos.show', $e) }}" class="btn btn-primary w-100 btn-sm"> 
                            Ver Detalhes
                        </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

    @endif
</div>
@endsection