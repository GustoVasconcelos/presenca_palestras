{{-- Desenvolvido pelas alunas: Larissa e Stefany --}}
@csrf

<div class="mb-3">
    <label class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ old('nome', $curso->nome ?? '') }}">
    @error('nome') <div class="form-error">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control" rows="3">{{ old('descricao', $curso->descricao ?? '') }}</textarea>
    @error('descricao') <div class="form-error">{{ $message }}</div> @enderror
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <label class="form-label">Carga Horária</label>
        <input type="number" name="carga_horaria" class="form-control" value="{{ old('carga_horaria', $curso->carga_horaria ?? '') }}">
        @error('carga_horaria') <div class="form-error">{{ $message }}</div> @enderror
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label">Instrutor</label>
        <input type="text" name="instrutor" class="form-control" value="{{ old('instrutor', $curso->instrutor ?? '') }}">
        @error('instrutor') <div class="form-error">{{ $message }}</div> @enderror
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label">Categoria</label>
        <input type="text" name="categoria" class="form-control" value="{{ old('categoria', $curso->categoria ?? '') }}">
        @error('categoria') <div class="form-error">{{ $message }}</div> @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Data de Início</label>
        <input type="date" name="data_inicio" class="form-control"
               value="{{ old('data_inicio', isset($curso) && $curso->data_inicio ? \Carbon\Carbon::parse($curso->data_inicio)->format('Y-m-d') : '') }}">
        @error('data_inicio') <div class="form-error">{{ $message }}</div> @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">Data de Fim</label>
        <input type="date" name="data_fim" class="form-control"
               value="{{ old('data_fim', isset($curso) && $curso->data_fim ? \Carbon\Carbon::parse($curso->data_fim)->format('Y-m-d') : '') }}">
        @error('data_fim') <div class="form-error">{{ $message }}</div> @enderror
    </div>
</div>
