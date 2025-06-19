<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhileController extends Controller
{
    public function calculo5() {
        $calculo5 = [
            0 => [
                'nome' => 'matheus',
                'status' =>'online',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => '11', //são paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'felipe',
                'status' =>'inativo',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => '85', //fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'joao',
                'status' =>'online',
                'cnpj' => '00.000.000/0000-00',
                'ddd' => '32', //fortaleza (CE)
                'telefone' => '0000-0000'
            ],
        ];
        return view('While.while',compact('calculo5'));
    }
}
