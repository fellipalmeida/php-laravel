<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Super Gestão - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}"> {{-- adicionando arquivos css externos as paginas web --}}
</head>

<body>
@yield('conteudo')  {{-- Substitui os @yield pelo conteúdo dos @section correspondentes --}}

</body>
</html>
