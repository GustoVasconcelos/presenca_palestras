@extends ('layouts.app')

@section ('title', 'Novo Aluno')

@section ('content')
    <h2>Cadastrar Aluno</h2>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        @include('alunos._form', ['cursos' => $cursos]) 

        <div class="d-flex gap-2 mt-3">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-circle"></i> Salvar
            </button>
            <a class="btn btn-outline-secondary" href="{{ route('alunos.index') }}">Cancelar</a>
        </div>
    </form>
@endsection
