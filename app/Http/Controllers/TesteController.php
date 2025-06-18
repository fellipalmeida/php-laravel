<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        //echo "a soma de $p1 e $p2 é ", ($p1 + $p2); //encaminhamento de parâmetros da rota para o controller
        //return view ('teste.teste', ['p1' => $p1 , 'p2' => $p2]); //encaminhamento de parâmetros do controlador para view com array associativo
        return view ('teste.teste', compact ('p1' , 'p2')); //encaminhando parâmetros do controlador por compact
        //return view('teste.teste')->with('p1', $p1)->with('p2', $p2);  //encaminhando parâmetros do controlador por with
    }
}

