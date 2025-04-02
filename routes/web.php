<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurmasController;



Route::get('/', function () {
    return view('index');
});

Route::get('/turmas',[TurmasController::class, 'index'])->name('turmas.turmas');
