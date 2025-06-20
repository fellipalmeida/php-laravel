<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function login(Request $request) {
       /*
        echo '<pre>';
        print_r($request ->all());
        echo '</pre>';
        echo '<br>';
        echo $request->input('Nome');
        echo '<br>';
        echo $request->input('email');
        return view('formulario.login');


        $contato = new formulario_cadastro();
        $contato->nome = $request->input('Nome');
        $contato->telefone = $request->input('Telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        print_r($contato ->getAttributes());
        */
        //$contato->save();
        return view('formulario.login');
    }

}
