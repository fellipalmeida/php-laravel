<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForeachController extends Controller
{
    /* public function calculo6() {
        $calculo6 = [
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
        return view('Foreach.foreach',compact('calculo6'));
    }

*/

public function calculo7() {
    $usuarios = [

        $usuario1 = [
            'nome2' =>  'joão',
            'idade' => 25
        ],
          $usuario2 = [
              'nome2' =>  'Maria',
              'idade' => 30
          ],
        $usuario3 = [
            'nome2' =>  'Pedro',
            'idade' => 28
        ]
   ];
    return view('Foreach.foreach',compact('usuarios'));
    }
}
// O @foreach é como dizer: "Para cada coisa na minha lista, faça isso"
