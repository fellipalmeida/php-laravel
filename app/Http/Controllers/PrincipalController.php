<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function SejaBemVindo() {
        Return view('principal.principal');
        //echo "Seja bem vindo";
    }
}
