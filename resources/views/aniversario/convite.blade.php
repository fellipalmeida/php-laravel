<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Convite Gerado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background: #f6f8fa;
        }

        .box {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            margin: auto;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2c3e50;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="box">
    <h1>✅ Convite criado com sucesso!</h1>
    <p>Copie e envie esse link para o convidado:</p>

    @php
        // Recuperar o último convite inserido
        $ultimoConvite = DB::table('convites')->latest('id')->first();
    @endphp

    @if ($ultimoConvite)
        <a href="{{ url('/confirmar/' . $ultimoConvite->id . '/' . $ultimoConvite->token) }}" target="_blank">
            Confirmar Presença
        </a>
    @else
        <p>Erro ao localizar o convite.</p>
    @endif
</div>
</body>
</html>
