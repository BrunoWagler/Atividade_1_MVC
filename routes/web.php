<?php


use App\Http\Controllers\EstudantesController;
use Illuminate\Support\Facades\Route;

Route::get("/", 
function () {
    return view("index");
}
);

Route::prefix('alunos')->name('alunos.')->group(function() {
    Route::get('/', [EstudantesController::class, 'index'])->name('index');
    Route::get('/create', [EstudantesController::class, 'create'])->name('create');
    Route::post('/', [EstudantesController::class, 'store'])->name('store');
    Route::get('/{id}', [EstudantesController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [EstudantesController::class, 'edit'])->name('edit');
    Route::put('/{id}', [EstudantesController::class, 'update'])->name('update');
    Route::delete('/{id}', [EstudantesController::class, 'destroy'])->name('destroy');
});

use App\Http\Controllers\TurmasController;

Route::prefix('turmas')->name('turmas.')->group(function () {
    Route::get('/', [TurmasController::class, 'index'])->name('index');
    Route::get('/create', [TurmasController::class, 'create'])->name('create');
    Route::post('/', [TurmasController::class, 'store'])->name('store');
    Route::get('/{id}', [TurmasController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [TurmasController::class, 'edit'])->name('edit');
    Route::put('/{id}', [TurmasController::class, 'update'])->name('update');
    Route::delete('/{id}', [TurmasController::class, 'destroy'])->name('destroy');
});


?>