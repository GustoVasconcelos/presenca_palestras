<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $this->autorizar();

        $admins = Admin::orderBy('nome_completo')->get();

        return view('admins.index', compact('admins'));
    }

    public function create()
    {
        $this->autorizar();

        return view('admins.create');
    }

    public function store(Request $request)
    {
        $this->autorizar();

        $dados = $request->validate([
            'login'        => ['required', 'string', 'max:50', 'unique:admins,login'],
            'nome_completo'=> ['required', 'string', 'max:255'],
            'password'     => ['required', 'string', 'min:4'],
        ]);

        $dados['password'] = Hash::make($dados['password']);

        Admin::create($dados);

        return redirect()
            ->route('admins.index')
            ->with('sucesso', 'Administrador cadastrado com sucesso!');
    }

    public function edit(Admin $admin)
    {
        $this->autorizar();

        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $this->autorizar();

        $dados = $request->validate([
            'login'        => ['required', 'string', 'max:50', 'unique:admins,login,' . $admin->id],
            'nome_completo'=> ['required', 'string', 'max:255'],
            'password'     => ['nullable', 'string', 'min:4'],
        ]);

        if (!empty($dados['password'])) {
            $dados['password'] = Hash::make($dados['password']);
        } else {
            unset($dados['password']);
        }

        $admin->update($dados);

        return redirect()
            ->route('admins.index')
            ->with('sucesso', 'Administrador atualizado com sucesso!');
    }

    public function destroy(Admin $admin)
    {
        $this->autorizar();

        if ($admin->login === 'admin') {
            return back()->withErrors(['login' => 'O usuário padrão "admin" não pode ser excluído.']);
        }

        $admin->delete();

        return redirect()
            ->route('admins.index')
            ->with('sucesso', 'Administrador removido com sucesso!');
    }

    private function autorizar()
    {
        if (! session('admin_id')) {
            abort(403, 'Acesso não autorizado. Faça login como admin.');
        }
    }
}
