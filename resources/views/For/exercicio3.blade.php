<br>

    @for ($i =0; isset ($calculo4[$i]); $i++)
    Nome: {{$calculo4[$i]['nome'] }}
    <br>
    Status: {{$calculo4[$i]['status'] }}
    <br>
    CNPJ: {{$calculo4[$i]['cnpj'] ?? '' }}
    <br>
    Telefone: ({{$calculo4[$i]['ddd'] ?? ' '}}) {{ $calculo4[$i] ['telefone'] ?? '' }}
    <hr>
    @endfor


{{-- @for($i = 1; $i <= 5; $i++)
           ↑      ↑       ↑
        começa  até    +1 de cada vez
   --}}
