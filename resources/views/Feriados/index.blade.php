<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feriados - Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
        body {
            background: linear-gradient(45deg, #2a9ee2, #1e7bb8);
            }
        .container-fluid {
            background-color: #2a9ee2;
            width: 100%;
            position: relative;

        }
        h1 {
            font-size: 50px;
            font-family: 'arial', sans-serif;
            text-align: center;
            color: #fdfdfd;
            padding: 30px 0;
            margin: 0;
            font-weight: bolder;
        }

        .conteudo {
            text-align: center;
        }
        .btn-primary {
            width: 150px;
            margin-bottom: 5px;
            margin-top: -80px;
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-size: 18px;
            font-weight: 600;
            transition: all 0.3s ease;

        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(42, 158, 226, 0.3);
        }
        .form-control {
            width: 200px;
            margin-bottom: 5px;
            margin-top: -80px;
        }
        .form-label {
            margin-bottom: 5px;
            margin-top: -80px;
        }


    </style>

</head>
    <body>

    <div class="container-fluid">
        <h1>Feriados</h1>
        <div class="search-header p-3 mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Botão criar à esquerda -->
                <div>
                    <a href="{{route('criar.feriados')}}">
                        <button class="btn btn-primary btn-lg">Criar</button>
                    </a>
                </div>

                <!-- Buscar à direita -->
                <div class="d-flex align-items-center gap-2">
                    <label for="buscar-header" class="form-label mb-0 text-white"><h5>Buscar:</h5></label>
                    <input type="text" class="form-control" id="buscar-header" placeholder="Nome do Feriado" style="width: 200px;">
                </div>
            </div>
        </div>

    </div>

     <div class="conteudo">
         <table class="table">

             <thead>
             <tr>
                 <th scope="col">Editar</th>
                 <th scope="col">ID</th>
                 <th scope="col">Descrição</th>
                 <th scope="col">Data</th>
                 <th scope="col">Fixo</th>
                 <th scope="col">Excluir</th>
             </tr>
             </thead>
             <tbody>

             </tbody>
         </table>
     </div>

    </body>
</html>

