<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwitchController extends Controller
{
    public function calculo3() {
        $calculo3 = [
            0 => [
                'nome' => 'matheus',
                'status' =>'online',
                'cnpj' => '0',
                'ddd' => '11', //são paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'felipe',
                'status' =>'inativo',
                'cnpj' => 'null',
                'ddd' => '85', //fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'joao',
                'status' =>'online',
                'cnpj' => 'null',
                'ddd' => '32', //fortaleza (CE)
                'telefone' => '0000-0000'
            ],
        ];
        return view('SwitchCase.exercicio2',compact('calculo3'));
    }
}
