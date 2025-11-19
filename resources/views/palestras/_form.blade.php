{{-- Desenvolvido pelos alunos: João Pedro e João Victor --}}
@csrf

<div class="mb-3">
    <label class="form-label">Título</label>
    <input type="text" name="titulo" class="form-control"
           value="{{ old('titulo', $palestra->titulo ?? '') }}">
    @error('titulo') <div class="form-error">{{ $message }}</div> @enderror
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">Data da Palestra</label>
        <input type="datetime-local" name="data" class="form-control"
               value="{{ old('data', isset($palestra) && $palestra->data ? $palestra->data->format('Y-m-d\TH:i') : '') }}">
        @error('data') <div class="form-error">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Local</label>
        <input type="text" name="local" class="form-control"
               value="{{ old('local', $palestra->local ?? '') }}">
        @error('local') <div class="form-error">{{ $message }}</div> @enderror
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Palestrante</label>
    <select name="palestrante_id" class="form-select">
        <option value="">Selecione...</option>
        @foreach($palestrantes as $pal)
            <option value="{{ $pal->id }}"
                    @selected(old('palestrante_id', $palestra->palestrante_id ?? '') == $pal->id)>
                {{ $pal->nome }}
            </option>
        @endforeach
    </select>
    @error('palestrante_id') <div class="form-error">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Evento (opcional)</label>
    <select name="evento_id" class="form-select">
        <option value="">Nenhum</option>
        @foreach($eventos as $ev)
            <option value="{{ $ev->id }}"
                    @selected(old('evento_id', $palestra->evento_id ?? '') == $ev->id)>
                {{ $ev->titulo }}
            </option>
        @endforeach
    </select>
    @error('evento_id') <div class="form-error">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control">{{ old('descricao', $palestra->descricao ?? '') }}</textarea>
</div>
