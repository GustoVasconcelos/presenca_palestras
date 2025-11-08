@csrf
<div class="mb-3">
 <label class="form-label">Título</label>
 <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $palestra->titulo ?? '') }}">
 @error('titulo') <div class="form-error">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
 <label class="form-label">Palestrante</label>
 <input type="text" name="palestrante" class="form-control" value="{{ old('palestrante', $palestra->palestrante ?? '') }}">
 @error('palestrante') <div class="form-error">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
 <label class="form-label">Data</label>
 <input type="datetime-local" name="data" class="form-control" value="{{ old('data', isset($palestra) ? optional($palestra->data)->format('Y-m-d\TH:i') : '') }}">
 @error('data') <div class="form-error">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
 <label class="form-label">Local</label>
 <input type="text" name="local" class="form-control" value="{{ old('local', $palestra->local ?? '') }}">
 @error('local') <div class="form-error">{{ $message }}</div>
@enderror
</div>
<div class="mb-3">
 <label class="form-label">Descrição</label>
 <textarea name="descricao" rows="4" class="form-control">{{
old('descricao', $palestra->descricao ?? '') }}</textarea>
 @error('descricao') <div class="form-error">{{ $message }}</div>
@enderror
</div>