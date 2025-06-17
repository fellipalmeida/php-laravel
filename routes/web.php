<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;


Route::get('/sobre-nos2', function () {
    return 'Sobre-nos';
});

Route::get('/', [PrincipalController::class, 'SejaBemVindo']); // encaminhamento para o controller.

Route::get('/contatos', [ContatoController::class, 'Contato2']);

Route::get('/sobre-nos', [SobreNosController::class, 'SobreNos']);


Route::get('/contatos/{nome}/{categoria}/{assunto}/{mensagem?}',
    function (string $nome,string $categoria,string $assunto, string $mensagem ) { //inclusão de parametros no rotas
    echo 'estamos aqui - ' . $nome .' - '. $categoria . ' - ' . $assunto . ' - ' . $mensagem;
});

Route::get('/contatos2/{nome}/{categoria}/{assunto}/{mensagem?}', // direita para esquerda
    function (string $nome,string $categoria,string $assunto, string $mensagem = 'mensagem não informada') { //inclusão de parametros opcionais
        echo 'estamos aqui - ' . $nome .' - '. $categoria . ' - ' . $assunto . ' - ' . $mensagem;
    });

// <-------------------------------------->

route::get('/teste/{nome2}/{categoria_id}',  // inclusão de parâmetros de rotas com expressões regulares
    function (
        string $nome2 = 'Desconhecido',
        int $categoria_id = 1
    ) {
     echo "estamos aqui - $nome2 - $categoria_id";
    }
) -> where('categoria_id', '[0-9]+') ->where('nome2', '[A-Za-z]+');

// <-------------------------------------->



//agrupando rotas pelo prefix
Route::prefix('/app')->group(function () {
Route::get('/clientes', function () {return 'Clientes';});           // Agrupando Rotas
Route::get('/fornecedores', function () {return 'Fornecedores';});
Route::get('/produtos', function () {return 'Produtos';});
});
// <-------------------------------------->

Route::get('/principal', [PrincipalController::class, 'SejaBemVindo']) ->name('site.index'); // Nomeando Rotas

Route::get('/contatos2', [ContatoController::class, 'Contato2']) ->name('site.contatos2');

Route::get('/sobre-nos2', [SobreNosController::class, 'SobreNos']) ->name('site.sobrenos');

Route::get('/login', function () {return 'Login';});
