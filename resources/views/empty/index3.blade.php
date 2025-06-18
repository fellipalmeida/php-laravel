<br>
@php
/*
if (empty($variavel)) {} // retornar true se a variavel estiver vazia

- ''
- ""
- 0
- 0.0
- '0'
- null
- false
- array()
- $var = //variavel sem valor
*/
@endphp


@isset($fornecedores4)
    Fornecedor {{$fornecedores4[1]['nome'] }}
    <br>
    Status: {{$fornecedores4[1]['status'] }}
    <br>
    @isset($fornecedores4[2]['cnpj'])
        CNPJ: {{$fornecedores4[2]['cnpj'] }}
        @empty($fornecedores4[2]['cnpj'])
            -Vazio
        @endempty
    @endisset
@endisset
