<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rota dashboard (temporária - será configurada com autenticação depois)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Rotas de tarefas (temporário sem middleware para teste)
Route::resource('tarefas', TarefaController::class);

// Rota para alternar status da tarefa
Route::patch('tarefas/{tarefa}/toggle-status', [TarefaController::class, 'toggleStatus'])
    ->name('tarefas.toggle-status');
