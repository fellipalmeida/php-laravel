<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{

    public function Contato2() {
        $idade = 19;
        return view('Contato.contatofront', compact('idade')); //transferindo variavel para view
        }
}

