<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperadorController extends Controller
{
    /*

    O operador ternário é uma forma concisa de escrever condições simples em uma única linha. É chamado de "ternário" porque envolve três operandos.

    condição ? valor_se_verdadeiro : valor_se_falso

    */


public function calculo() {
    $idade5 =18;
    $status = $idade5 >=18 ? 'maior de idade' : 'menor de idade';
    return view('operadores.condicional', compact('status'));
}
}
