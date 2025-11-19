{{-- Desenvolvido pelos alunos: Karina e Victor --}}
@csrf

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Nome Completo</label>
        <input type="text" class="form-control" name="nome"
               value="{{ old('nome', $aluno->nome ?? '') }}">
        @error('nome') <div class="form-error">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-3 mb-3">
        <label class="form-label">RA</label>
        <input type="text" class="form-control" name="ra"
               value="{{ old('ra', $aluno->ra ?? '') }}">
        @error('ra') <div class="form-error">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-3 mb-3">
        <label class="form-label">Módulo (1 a 6)</label>
        <select class="form-control" name="modulo">
            <option value="">Selecione o módulo</option>
            @for ($i = 1; $i <= 6; $i++)
                <option value="{{ $i }}" {{ old('modulo', $aluno->modulo ?? '') == $i ? 'selected' : '' }}>
                    {{ $i }}
                </option>
            @endfor
        </select>
        @error('modulo') <div class="form-error">{{ $message }}</div> @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">E-mail</label>
        <input type="email" class="form-control" name="email"
               value="{{ old('email', $aluno->email ?? '') }}">
        @error('email') <div class="form-error">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">
            Senha
            @if(isset($aluno))
                <small class="text-muted">(Deixe em branco para não alterar)</small>
            @endif
        </label>
        <input type="password" class="form-control" name="password" value="">
        @error('password') <div class="form-error">{{ $message }}</div> @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Curso</label>
        <select class="form-control" name="curso_id">
            <option value="">Selecione um curso</option>
            @foreach($cursos as $curso)
                <option value="{{ $curso->id }}"
                    {{ (old('curso_id', $aluno->curso_id ?? '') == $curso->id) ? 'selected' : '' }}>
                    {{ $curso->nome }}
                </option>
            @endforeach
        </select>
        @error('curso_id')
            <div class="form-error">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-3 mb-3">
        <label class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control"
               value="{{ old('data_nasc', optional($aluno->data_nasc ?? null)->format('Y-m-d')) }}">
        @error('data_nasc') <div class="form-error">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-3 mb-3">
        <label class="form-label">Sexo</label>
        <select class="form-control" name="sexo">
            <option value="">Selecione o sexo</option>
            @php $sexoOpcoes = ['Masculino', 'Feminino', 'Não Informar']; @endphp
            @foreach($sexoOpcoes as $opcao)
                <option value="{{ $opcao }}"
                    {{ (old('sexo', $aluno->sexo ?? '') == $opcao) ? 'selected' : '' }}>
                    {{ $opcao }}
                </option>
            @endforeach
        </select>
        @error('sexo')
            <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
</div>
