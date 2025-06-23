<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('login/css/formulario.css')}}">
    <title>Document</title>
</head>
<body>

@if (session('sucesso'))
    <div style="color: green; font-weight: bold;">
        {{ session('sucesso') }}
    </div>
@endif

{{--@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif
--}}
<form action="{{ route('salvar') }}" method="post"> {{-- 1- colocar route e o metodo--}}
    @csrf
    <input name="nome"  value="{{ old('nome') }}" type="text" placeholder="Nome" class="borda-preta"> {{-- 2- colocar name em todos os campos --}}
    @if($errors->has('nome'))
        {{ $errors->first('nome')  }}     {{-- o if apresenta o erro na tela --}}
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}"  type="text" placeholder="Telefone" class="borda-preta"> {{-- colocar o old para recuperar os dados --}}
    @if($errors->has('telefone'))
        {{ $errors->first('telefone')  }}
    @endif
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="borda-preta">
    @if($errors->has('email'))
        {{ $errors->first('email')  }}
    @endif
    <br>
    <select name="motivo_contato" class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="1" {{ old('motivo_contato') == '1' ? 'selected' : '' }}>Dúvida</option>
        <option value="2" {{ old('motivo_contato') == '2' ? 'selected' : '' }}>Elogio</option>
        <option value="3" {{ old('motivo_contato') == '3' ? 'selected' : '' }}>Reclamação</option>
    </select>
    @if($errors->has('motivo_contato'))
        {{ $errors->first('motivo_contato')  }}
    @endif
    <br>
    <textarea name="mensagem" class="borda-preta" placeholder="escreva aqui sua mensagem">{{ old('mensagem') }}</textarea>
    <br>
    @if($errors->has('mensagem'))
        {{ $errors->first('mensagem')  }}
    @endif
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>

</body>
</html>
