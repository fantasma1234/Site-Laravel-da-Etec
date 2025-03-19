<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobrenosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\EntrarController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobrenos', [SobrenosController::class, 'sobrenos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/produtos', [ProdutosController::class, 'produtos'])->name('site.produtos');

Route::get('/entrar', [EntrarController::class, 'entrar'])->name('site.entrar');
