@csrf
<div class="mb-3">
    <label class="form-label">Login</label>
    <input type="text" name="login" class="form-control"
           value="{{ old('login', $admin->login ?? '') }}">
    @error('login') <div class="form-error">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Nome completo</label>
    <input type="text" name="nome_completo" class="form-control"
           value="{{ old('nome_completo', $admin->nome_completo ?? '') }}">
    @error('nome_completo') <div class="form-error">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">
        Senha
        @if(isset($admin))
            <small class="text-muted">(deixe em branco para manter a senha atual)</small>
        @endif
    </label>
    <input type="password" name="password" class="form-control">
    @error('password') <div class="form-error">{{ $message }}</div> @enderror
</div>
