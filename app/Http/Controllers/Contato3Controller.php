<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contato3Controller extends Controller
{
    public function Contato3() {
        var_dump($_GET); //ele aparece todas as informações do get que foram enviadas do formulario
        return view('tutorial.contato3');
    }
}
