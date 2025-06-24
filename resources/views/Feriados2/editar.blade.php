<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Feriado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #4A90E2, #357ABD);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .form-title {
            text-align: center;
            color: #4A90E2;
            font-size: 1.8em;
            margin-bottom: 30px;
            font-weight: 300;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }

        .form-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: #4A90E2;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.3);
        }

        .checkbox-container {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #e9ecef;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .checkbox-input {
            margin-right: 10px;
            width: 18px;
            height: 18px;
        }

        .checkbox-label {
            font-weight: 500;
            color: #333;
        }

        .checkbox-description {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }

        .form-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            display: inline-block;
        }

        .btn-primary {
            background: #4A90E2;
            color: white;
        }

        .btn-primary:hover {
            background: #357ABD;
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #545b62;
        }

        .error-message {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }

        .alert {
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2 class="form-title">Editar Feriado</h2>

    @if($errors->any())
        <div class="alert alert-error">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('atualizar.feriados', $feriado->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="form-label">📝 Descrição do Feriado</label>
            <input type="text"
                   name="descricao"
                   class="form-input"
                   placeholder="Nome do Feriado"
                   value="{{ old('descricao', $feriado->descricao) }}"
                   required>
            @error('descricao')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label">📅 Data do Feriado</label>
            <input type="date"
                   name="data"
                   class="form-input"
                   value="{{ old('data', $feriado->data) }}"
                   required>
            @error('data')
            <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <div class="checkbox-container">
                <div class="checkbox-wrapper">
                    <input type="checkbox"
                           name="fixo"
                           id="fixo"
                           class="checkbox-input"
                           value="1"
                        {{ old('fixo', $feriado->fixo) ? 'checked' : '' }}>
                    <label for="fixo" class="checkbox-label">☑️ Feriado Fixo</label>
                </div>
                <div class="checkbox-description">
                    Marque se este feriado se repete todos os anos na mesma data
                </div>
            </div>
        </div>

        <div class="form-buttons">
            <a href="{{ route('site.feriados') }}" class="btn btn-secondary">← Voltar</a>
            <button type="submit" class="btn btn-primary">Atualizar Feriado</button>
        </div>
    </form>
</div>
</body>
</html>
