@csrf
<div class="mb-3">
    <label class="form-label">Título</label>
    <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $evento->titulo ?? '') }}">
    @error('titulo') <div class="form-error">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Data de Início</label>
    <input type="datetime-local" name="dataInicio" class="form-control" value="{{ old('dataInicio', isset($evento) ? optional($evento->dataInicio)->format('Y-m-d\TH:i') : '') }}">
    @error('dataInicio') <div class="form-error">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Data de Término</label>
    <input type="datetime-local" name="dataFim" class="form-control" value="{{ old('dataFim', isset($evento) ? optional($evento->dataFim)->format('Y-m-d\TH:i') : '') }}">
    @error('dataFim') <div class="form-error">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Local</label>
    <input type="text" name="local" class="form-control" value="{{ old('local', $evento->local ?? '') }}">
    @error('local') <div class="form-error">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="descricao" rows="4" class="form-control">{{ old('descricao', $evento->descricao ?? '') }}</textarea>
    @error('descricao') <div class="form-error">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Curso (Opcional)</label>
    <input type="text" name="curso" class="form-control" value="{{ old('curso', $evento->curso ?? '') }}">
    @error('curso') <div class="form-error">{{ $message }}</div> @enderror
</div>