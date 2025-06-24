<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar - Feriado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(45deg, #2a9ee2, #1e7bb8);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Roboto', sans-serif;
        }

        .form-container {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            margin: 20px;
        }

        .form-title {
            text-align: center;
            color: #2a9ee2;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control {
            border: 2px solid #e1e5e9;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #2a9ee2;
            box-shadow: 0 0 0 0.2rem rgba(42, 158, 226, 0.25);
        }

        .form-check {
            margin: 20px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
            border: 2px solid #e1e5e9;
        }

        .form-check-input {
            transform: scale(1.2);
            margin-right: 10px;
        }

        .form-check-label {
            font-weight: 500;
            color: #333;
        }

        .btn-primary {
            background: linear-gradient(45deg, #2a9ee2, #1e7bb8);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-size: 18px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(42, 158, 226, 0.3);
        }

        .btn-secondary {
            background: #6c757d;
            border: none;
            border-radius: 10px;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            color: white;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-secondary:hover {
            background: #5a6268;
            transform: translateY(-1px);
            color: white;
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .button-group .btn-secondary {
            flex: 1;
        }

        .button-group .btn-primary {
            flex: 2;
        }

        .icon {
            margin-right: 8px;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2 class="form-title">
        Criar Novo Feriado
    </h2>

    <form action="{{ route('salvar.feriados') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="descricao" class="form-label">
                <span class="icon">📝</span>Descrição do Feriado
            </label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Nome do Feriado" >

        </div>

        <div class="mb-4">
            <label for="data" class="form-label">
                <span class="icon">📅</span>Data do Feriado
            </label>
            <input type="date" class="form-control" id="data" name="data">
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="fixo" name="fixo">
            <label class="form-check-label" for="fixo">
                <span class="icon">🔄</span>
                <strong>Feriado Fixo</strong>
                <br>
                <small class="text-muted">Marque se este feriado se repete todos os anos na mesma data</small>
            </label>
        </div>

        <div class="button-group">
            <a href="{{ route('site.feriados') }}" class="btn btn-secondary">
                ← Voltar
            </a>
            <a href="{{ route('site.feriados') }}">
                <button type="submit" class="btn btn-primary">
                <span class="icon"></span>Criar Feriado
            </button></a>

        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

