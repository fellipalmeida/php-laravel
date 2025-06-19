<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForelseController extends Controller
{
    public function calculo8() {
        $usuarios = [];
        return view('Forelse.forelse',compact('usuarios'));
    }
}
