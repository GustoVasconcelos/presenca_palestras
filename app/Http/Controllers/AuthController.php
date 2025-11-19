<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_id')) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credenciais = $request->validate([
            'login'    => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $admin = Admin::where('login', $credenciais['login'])->first();

        if (! $admin || ! Hash::check($credenciais['password'], $admin->password)) {
            return back()
                ->withErrors(['login' => 'Login ou senha inválidos.'])
                ->withInput();
        }

        // guarda dados mínimos na sessão
        session([
            'admin_id'   => $admin->id,
            'admin_nome' => $admin->nome_completo,
        ]);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        session()->forget(['admin_id', 'admin_nome']);
        session()->flush();

        return redirect()->route('login')
            ->with('sucesso', 'Sessão encerrada com sucesso.');
    }
}
