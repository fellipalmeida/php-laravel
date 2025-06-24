<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;


class FeriadosController extends Controller
{

   public function index2() {

       return view('feriados.index');
   }

    public function criar() {

        return view('feriados.criar');
    }
}
