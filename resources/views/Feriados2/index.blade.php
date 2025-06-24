<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feriados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #4A90E2, #357ABD);
            min-height: 100vh;
        }

        .header {
            background: linear-gradient(135deg, #4A90E2, #357ABD);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: 300;
        }

        .header-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .btn {
            background: #2E7D32;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn:hover {
            background: #1B5E20;
        }

        .btn-danger {
            background: #D32F2F;
        }

        .btn-danger:hover {
            background: #B71C1C;
        }

        .btn-warning {
            background: #F57C00;
        }

        .btn-warning:hover {
            background: #EF6C00;
        }

        .search-box {
            padding: 8px;
            border: none;
            border-radius: 5px;
            margin-left: 10px;
        }

        .table-container {
            background: white;
            margin: 0;
            padding: 0;
        }

        .table-header {
            background: #f5f5f5;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            display: grid;
            grid-template-columns: 1fr 100px 2fr 150px 100px 100px;
            font-weight: bold;
            color: #333;
        }

        .table-row {
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: grid;
            grid-template-columns: 1fr 100px 2fr 150px 100px 100px;
            align-items: center;
        }

        .table-row:hover {
            background: #f9f9f9;
        }

        .alert {
            margin: 20px;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 0;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .fixo-badge {
            background: #4CAF50;
            color: white;
            padding: 4px 8px;
            border-radius: 3px;
            font-size: 12px;
        }

        .no-data {
            text-align: center;
            padding: 50px;
            color: #666;
            font-style: italic;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="header-controls">
        <a href="{{ route('criar.feriados') }}" class="btn">Criar</a>
        <h1>Feriados</h1>
        <div>
            <span>Buscar:</span>
            <input type="text" class="search-box" placeholder="Nome do Feriado" id="searchInput">
        </div>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endif

<div class="table-container">
    <div class="table-header">
        <div>Editar</div>
        <div>ID</div>
        <div>Descrição</div>
        <div>Data</div>
        <div>Fixo</div>
        <div>Excluir</div>
    </div>

    @if($feriados->count() > 0)
        @foreach($feriados as $feriado)
            <div class="table-row">
                <div>
                    <a href="{{ route('editar.feriados', $feriado->id) }}" class="btn btn-warning">✏️ Editar</a>
                </div>
                <div>{{ $feriado->id }}</div>
                <div>{{ $feriado->descricao }}</div>
                <div>{{ date('d/m/Y', strtotime($feriado->data)) }}</div>
                <div>
                    @if($feriado->fixo)
                        <span class="fixo-badge">Fixo</span>
                    @else
                        -
                    @endif
                </div>
                <div>
                    <form method="POST" action="{{ route('excluir.feriados', $feriado->id) }}" style="display: inline;"
                          onsubmit="return confirm('Tem certeza que deseja excluir este feriado?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">🗑️ Excluir</button>
                    </form>
                </div>
            </div>
        @endforeach
    @else
        <div class="no-data">
            Nenhum feriado cadastrado ainda. <a href="{{ route('criar.feriados') }}">Criar o primeiro feriado</a>
        </div>
    @endif
</div>

<script>
    // Funcionalidade de busca simples
    document.getElementById('searchInput').addEventListener('keyup', function() {
        const searchTerm = this.value.toLowerCase();
        const rows = document.querySelectorAll('.table-row');

        rows.forEach(row => {
            const descricao = row.children[2].textContent.toLowerCase();
            if (descricao.includes(searchTerm)) {
                row.style.display = 'grid';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>
