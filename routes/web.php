<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

// Route::get('/', function () {
//     return view('welcome');
// });

// tarefa
Route::get('/tarefa', [TarefaController::class, 'index'])->name('tarefa.index');
Route::get('/tarefa/create', [TarefaController::class, 'create'])->name('tarefa.create');
