@php
/*
   if(isset($variavel)) {} //retornar true se a variavel estiver definida
  */
@endphp
<br>
@isset($fornecedores3)
    Fornecedor {{$fornecedores3[1]['nome'] }}
    <br>
    Status: {{$fornecedores3[1]['status'] }}
    <br>
    @isset($fornecedores3[2]['cnpj'])
           CNPJ: {{$fornecedores3[2]['cnpj'] }}
    @endisset
@endisset
