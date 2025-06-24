<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Feriados2Controller extends Controller
{
    // Método para mostrar a página principal com lista de feriados
    public function index()
    {
        // Busca todos os feriados da tabela
        $feriados = DB::table('dadosferiados')
            ->select('id', 'descricao', 'data', 'fixo')
            ->orderBy('data', 'asc')
            ->get();

        return view('Feriados2.index', compact('feriados'));
    }

    // Método para mostrar o formulário de criação
    public function criar()
    {
        return view('Feriados2.criar');
    }

    // Método para salvar o feriado no banco
    public function criarferiado(Request $request)
    {
        // Validação simples
        $request->validate([
            'descricao' => 'required|string|max:255',
            'data' => 'required|date',
        ]);

        // Inserir o feriado na tabela
        DB::table('dadosferiados')->insert([
            'descricao' => $request->descricao,
            'data' => $request->data,
            'fixo' => $request->has('fixo') ? 1 : 0,
        ]);

        return redirect()->route('site.feriados')->with('success', 'Feriado criado com sucesso!');
    }

    // Método para mostrar formulário de edição
    public function editar($id)
    {
        $feriado = DB::table('dadosferiados')->where('id', $id)->first();

        if (!$feriado) {
            return redirect()->route('site.feriados')->with('error', 'Feriado não encontrado!');
        }

        return view('Feriados2.editar', compact('feriado'));
    }

    // Método para atualizar o feriado
    public function atualizar(Request $request, $id)
    {
        // Validação simples
        $request->validate([
            'descricao' => 'required|string|max:255',
            'data' => 'required|date',
        ]);

        // Atualizar o feriado
        DB::table('dadosferiados')
            ->where('id', $id)
            ->update([
                'descricao' => $request->descricao,
                'data' => $request->data,
                'fixo' => $request->has('fixo') ? 1 : 0,
            ]);

        return redirect()->route('site.feriados')->with('success', 'Feriado atualizado com sucesso!');
    }

    // Método para excluir o feriado
    public function excluir($id)
    {
        DB::table('dadosferiados')->where('id', $id)->delete();

        return redirect()->route('site.feriados')->with('success', 'Feriado excluído com sucesso!');
    }
}
