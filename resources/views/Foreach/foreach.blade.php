<br>
{{--
 @foreach($calculo6 as $indice => $fornecedor)
    Nome: {{$fornecedor ['nome'] }}
    @php $calculo6[$indice]['nome'] = 'Outro nome para o fornecedor' @endphp
    <br>
    Status: {{$fornecedor['status'] }}
    <br>
    CNPJ: {{$fornecedor['cnpj'] ?? '' }}
    <br>
    Telefone: ({{$fornecedor['ddd'] ?? ' '}}) {{ $fornecedor ['telefone'] ?? '' }}
    <hr>
@endforeach
--}}

<h3>Lista de usuarios</h3>

@foreach($usuarios as $usuario)
    <p>Nome: {{ $usuario['nome2'] }}</p>
    <p>Idade: {{ $usuario['idade'] }} anos</p>
    <hr>
@endforeach
