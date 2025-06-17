<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;


Route::get('/', [PrincipalController::class, 'SejaBemVindo']);

Route::get('/contatos', [ContatoController::class, 'Contato2']);

Route::get('/sobre-nos', [SobreNosController::class, 'SobreNos']);


Route::get('/sobre-nos2', function () {
    return 'Sobre-nos';
});
