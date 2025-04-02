<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/cursos', [CursosController::class, 'cursos'])->name('site.cursos');

Route::get('/departamentos', [DepartamentosController::class, 'departamentos'])->name('site.departamentos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
