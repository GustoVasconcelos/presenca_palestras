<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\PalestranteController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PalestraController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteController;

/**
 * Módulo Cursos: Larissa e Stefany
 * Módulo Alunos: Karina e Victor
 * Módulo Palestrantes: Bruno e Enzo
 * Módulo Eventos: Augusto e João
 * Módulo Palestras: João Pedro e João Victor
 * Módulo Admin: Painel de Controle / Usuários Administradores
 * Módulo Site: Área pública (Eventos, Palestras, Inscrição)
 */

/* ============================================================
 *  ROTAS DA ÁREA PÚBLICA (SEM LOGIN)
 * ============================================================ */

Route::get('/', [SiteController::class, 'index'])->name('site.index');

/* Página pública de eventos */
Route::get('/eventos-publico', [SiteController::class, 'eventos'])->name('site.eventos');

/* Página pública de palestras */
Route::get('/palestras-publico', [SiteController::class, 'palestras'])->name('site.palestras');

/* Tela pública de inscrição */
Route::get('/inscricao', [SiteController::class, 'inscricao'])->name('site.inscricao');


/* ============================================================
 *  AUTENTICAÇÃO (LOGIN ADMIN)
 * ============================================================ */

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.do');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/* ============================================================
 *  PAINEL DE CONTROLE (REQUER LOGIN)
 * ============================================================ */

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/registrar-presenca', 
    [DashboardController::class, 'registrarPresenca']
)->name('dashboard.registrar_presenca');

Route::get('/dashboard/lista-inscritos', 
    [DashboardController::class, 'listaInscritos']
)->name('dashboard.lista_inscritos');

Route::get('/dashboard/lista-presencas', 
    [DashboardController::class, 'listaPresencas']
)->name('dashboard.lista_presencas');


/* ============================================================
 *  MÓDULOS INTERNOS DO PAINEL (CRUD COMPLETOS)
 * ============================================================ */

Route::resource('cursos', CursoController::class);
Route::resource('alunos', AlunoController::class);
Route::resource('palestrantes', PalestranteController::class);
Route::resource('eventos', EventoController::class);
Route::resource('palestras', PalestraController::class);

/* Gerenciar Admins */
Route::resource('admins', AdminController::class)->except(['show']);
