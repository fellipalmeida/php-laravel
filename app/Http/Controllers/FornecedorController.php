<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function Contato3() {
       $fornecedores = ['Fornecedor 1', 'Fornecedor 1' , 'Fornecedor 1', 'Fornecedor 1', 'Fornecedor 1', 'Fornecedor 1', 'Fornecedor 1', 'Fornecedor 1'
       , 'Fornecedor 1' , 'Fornecedor 1', 'Fornecedor 1']; // sempre colocar em aspas simples
     return view('Fornecedor.fornecedor', compact('fornecedores'));   // transferindo array para view
    }

    public function Unless()
    {
        $fornecedoress = [
            0 => ['nome' => 'Mercado 2', 'status' =>'online']
        ];
        return view('Fornecedor2.index', compact('fornecedoress'));
    }
//utilizando Isset
    public function Isset()
    {
        $fornecedores3 = [
            1 => [
                'nome' => 'Mercado 2',
                'status' =>'online'
            ],

            2 => ['nome' => 'Mercado 2',
                'status' =>'online',
                'cnpj' => '00.000.000/0000-00'
            ]
        ];
        return view('Fornecedor3.index2', compact('fornecedores3'));
    }

    //utilizando empty
    public function Empty()
    {
        $fornecedores4 = [
            1 => [
                'nome' => 'Mercado 2',
                'status' =>'online'
            ],

            2 => [
                'nome' => 'Mercado 2',
                'status' =>'online',
                'cnpj' => '00'
            ]
        ];
        return view('empty.index3', compact('fornecedores4'));
    }

}
