<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //importante para acessar o banco de dados

class FormularioController extends Controller
{
    // Função para mostrar o formulário
    public function mostrar()
    {
        return view('formulario.login'); // vai buscar o arquivo login.blade.php
    }

    // Função para processar o formulário (quando clica ENVIAR)
    public function processar(Request $request)
    {
        //validar os campos
        $request->validate([
            'nome' => 'required|min:3|max:10', //colocando required e maximo e minimo caracteres
            'email' => 'required|email|unique:usuarios', //unique ele consulta no banco de dados se essa informação já tem
            'telefone' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|min:10'
        ],
            [
            'nome.required' => 'O campo precisa ser preenchido',
            'nome.min' => 'O campo precisa ter ao menos 3 caracteres', //,mensagem personalizada na verificação dos dados do formulario
            'nome.max' => 'O campo precisa ter até 10 caracteres',

            'email.required' => 'O campo precisa ser preenchido',
            'email.email' => 'Precisa ser um E-mail',
            'email.unique' => 'Esse e-mail já está cadastrado',

            'telefone.required' => 'O campo precisa ser preenchido',

            'motivo_contato.required' => 'O campo precisa ser preenchido',

            'mensagem.required' => 'O campo precisa ser preenchido'
            ]
        );
       try {     // try {}: aqui você coloca o código que pode gerar um erro, como uma chamada ao banco de dados, leitura de arquivo, envio de e-mail etc.
            // Inserir os dados na tabela usuarios usando Query Builder
            DB::table('usuarios')->insert([
                'nome' => $request->nome,
                'telefone' => $request->telefone,
                'email' => $request->email,
                'motivo_contato' => $request->motivo_contato,
                'mensagem' => $request->mensagem
            ]);

            // Redireciona de volta com mensagem de sucesso
            return redirect()->back()->with('sucesso', 'Formulário enviado com sucesso!');

      }
       catch (\Exception $e) { //catch (Exception $e) {}: aqui você trata o erro, ou seja, define o que fazer se algo der errado (ex: mostrar uma mensagem amigável, registrar o erro no log, redirecionar, etc).
           // Se der erro, mostra a mensagem de erro
           return redirect()->back()->with('erro', 'Erro ao enviar ' . $e->getMessage() );
       }
    }


    // Função para listar todos os formulários enviados
//    public function listar()
//    {
//        // Busca todos os usuários da tabela usando Query Builder
//        $usuarios = DB::table('usuarios')->get();
//
//        // Envia os dados para a view lista-usuarios.blade.php
//        return view('formulario.login', compact('usuarios'));
//    }
}
