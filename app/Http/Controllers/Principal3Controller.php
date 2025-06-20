<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal3Controller extends Controller
{
    public function Principal3() {
        var_dump($_POST);
        return view('tutorial.principal3', ['titulo' => 'Home']); //declarando array para mudar o title no principal3.blade.php
    }

}
