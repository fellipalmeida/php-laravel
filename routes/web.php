<?php

use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SwitchController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\OperadorController;
use App\Http\Controllers\ForController;
use App\Http\Controllers\WhileController;
use App\Http\Controllers\ForeachController;
use App\Http\Controllers\ForelseController;
use App\Http\Controllers\Principal3Controller;
use App\Http\Controllers\Contato3Controller;
use App\Http\Controllers\Sobrenos3Controller;





Route::get('/sobre-nos2', function () {   //criando route com um call back
    return 'Sobre-nos';
});

Route::get('/', [PrincipalController::class, 'SejaBemVindo']); // encaminhamento para o controller.
Route::get('/sobre-nos', [SobreNosController::class, 'SobreNos']);


Route::get('/contatos7/{nome}/{categoria}/{assunto}/{mensagem?}',
    function (string $nome,string $categoria,string $assunto, string $mensagem ) { //inclusão de parametros no rotas
    echo 'estamos aqui - ' . $nome .' - '. $categoria . ' - ' . $assunto . ' - ' . $mensagem;
});

Route::get('/contatos8/{nome}/{categoria}/{assunto}/{mensagem?}', // direita para esquerda
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

//utilizando name nas routes

Route::get('/principal', [PrincipalController::class, 'SejaBemVindo']) ->name('site.index'); // Nomeando Rotas

Route::get('/contatos2', [ContatoController::class, 'Contato2']) ->name('site.contatos2');

Route::get('/sobre-nos2', [SobreNosController::class, 'SobreNos']) ->name('site.sobrenos');

Route::get('/login', function () {return 'Login';}) ->name ('site.login');

Route::prefix('/app2')->group(function () {
    Route::get('/clientes2', function () {return 'Clientes';}) ->name('site.clientes');           // nomeando as rotas
    Route::get('/fornecedores2', function () {return 'Fornecedores';}) ->name('site.fornecedores');
    Route::get('/produtos2', function () {return 'Produtos';}) ->name('site.produtos');
});

// <-------------------------------------->

//rederecionamento de rotas

route::get('/rota1', function () {
    echo 'Você está na Rota1';
}) -> name('site.rota1');

route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})-> name('site.rota2');

//ou
//route::redirect('/rota2', '/rota1');
// <-------------------------------------->


//encaminhamento de parâmetros da rota para o controller
route::get('/rota3/{p1}/{p2}',[TesteController::class, 'teste'])-> name('teste');


//utilizando if e else

Route::get('/contatos', [ContatoController::class, 'Contato2',]); //transferindo váriavel para o view e com if e else e else if

Route::get('/contatos5', [FornecedorController::class, 'Contato3',]); //transferindo array para o view com if e else e else if

//utilizando unless

route::get('/unless',[FornecedorController::class, 'Unless']); //utilizando a tag @unless @endunless

//utilizando Isset

route::get('/isset',[FornecedorController::class, 'isset']); //utilizando a tag @isset @endisset

//utilizando empty

route::get('/empty',[FornecedorController::class, 'Empty']); //utilizando a tag empty

// utilizando operador condicional ternário

route::get ('/operador/condicional/ternario', [OperadorController::class, 'calculo']); // utilizando ternário

// switch / case

route::get ('/switch', [SwitchController::class, 'calculo3']); //utilizando a tag switch case e default

// for

route::get('/for', [ForController::class, 'calculo4']); // utilizando for

//while
route::get('/while', [WhileController::class, 'calculo5']); //  utilizando while

//foreach
route::get('/foreach', [ForeachController::class, 'calculo7']); // utilizando foreach pode usar também o calculo6

//forelse

route::get('/forelse', [ForelseController::class, 'calculo8']); // utilizando forelse

//assets, @extends @include @yield @section route e assets e utilizando metodos de formulario get e post
route::post('/principal3', [Principal3Controller::class, 'Principal3'])->name('principal3'); // adicionando arquivo css externo no blade, utilizando assets e route no ahref
route::get('/principal3', [Principal3Controller::class, 'Principal3'])->name('principal3'); //formulario post precisa ter 2 rotas uma get e uma post
route::get('/contato3', [Contato3Controller::class, 'Contato3']) ->name('contato3'); // utilizando @extends @yield @section @endsection
route::get('/sobrenos3', [Sobrenos3Controller::class, 'Sobrenos3']) ->name('sobrenos3');

//formulários : request e utilizando try e catch e também utilizando ->validate e também o banco de dados
route::get('/formulario', [App\Http\Controllers\FormularioController::class, 'mostrar']) ->name('formulario');
route::post('/formulario', [App\Http\Controllers\FormularioController::class, 'processar']) ->name('salvar');


// Rota para criar um novo convite
Route::get('/criar-convite', [App\Http\Controllers\AniversarioController::class, 'criarConvite']);

// Rota para confirmar presença com ID e token
Route::get('/confirmar/{id}/{token}', [App\Http\Controllers\AniversarioController::class, 'confirmar']);

//feriados

route::get('/cadastros/feriados', [App\Http\Controllers\FeriadosController::class, 'index2' ]);
