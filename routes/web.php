<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurmasController;
use App\Http\Controllers\EstudantesController;





Route::get('/', function () {
    return view('index');
});

Route::get('/turmas',[TurmasController::class, 'index'])->name('turmas.turmas');

Route::get('/alunos',[EstudantesController::class, 'index'])->name('alunos.estudantes');
