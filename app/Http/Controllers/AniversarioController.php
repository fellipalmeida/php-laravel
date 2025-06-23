<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AniversarioController extends Controller
{
    public function criarConvite()
    {
        DB::table('convites')->insert([
            'token' => Str::random(16),
            'confirmado' => false,
            'data_validade' => Carbon::now()->addDays(7),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return view('aniversario.convite');
    }

    public function confirmar($id, $token)
    {
        $convite = DB::table('convites')
            ->where('id', $id)
            ->where('token', $token)
            ->first();

        if (!$convite) {
            return view('convite.invalido');
        }

        $expirado = $convite->data_validade && Carbon::now()->gt($convite->data_validade);

        if ($expirado && !$convite->confirmado) {
            return view('convite.expirado');
        }

        if (!$convite->confirmado) {
            DB::table('convites')
                ->where('id', $id)
                ->update([
                    'confirmado' => true,
                    'updated_at' => now()
                ]);
        }

        return view('convite.confirmado', [
            'confirmadoEm' => now(),
            'expirado' => $expirado
        ]);
    }
}
