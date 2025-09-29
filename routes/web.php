<?php

use App\Http\Controllers\TarefaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rotas de tarefas (temporário sem middleware para teste)
Route::resource('tarefas', TarefaController::class);

// Rota para alternar status da tarefa (temporário sem middleware)
Route::patch('tarefas/{tarefa}/toggle-status', [TarefaController::class, 'toggleStatus'])
    ->name('tarefas.toggle-status');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

