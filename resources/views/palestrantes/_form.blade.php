{{-- Desenvolvido pelos alunos: Bruno e Enzo --}}
@csrf

<div class="mb-3">
    <label class="form-label">Nome <span class="text-danger">*</span></label>
    <input type="text" name="nome" class="form-control"
           value="{{ old('nome', $palestrante->nome ?? '') }}" required>
    @error('nome') <div class="form-error">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Email <span class="text-danger">*</span></label>
    <input type="email" name="email" class="form-control"
           value="{{ old('email', $palestrante->email ?? '') }}" required>
    @error('email') <div class="form-error">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Telefone</label>
    <input type="text" name="telefone" class="form-control"
           value="{{ old('telefone', $palestrante->telefone ?? '') }}">
    @error('telefone') <div class="form-error">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Especialidade</label>
    <input type="text" name="especialidade" class="form-control"
           value="{{ old('especialidade', $palestrante->especialidade ?? '') }}">
    @error('especialidade') <div class="form-error">{{ $message }}</div> @enderror
</div>
