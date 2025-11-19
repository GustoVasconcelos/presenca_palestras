<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('login')->unique();
            $table->string('password');
            $table->string('nome_completo');
            $table->timestamps();
        });

        // Usuário padrão: admin / admin
        DB::table('admins')->insert([
            'login'        => 'admin',
            'password'     => Hash::make('admin'),
            'nome_completo'=> 'Administrador',
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
