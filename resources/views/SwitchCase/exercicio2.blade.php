@isset($calculo3)
    Nome: {{$calculo3[1]['nome']}}
    <br>
    Status: {{$calculo3[1]['status']}}
    <br>
    CNPJ: {{$calculo3[1]['cnpj'] ?? ''}}
    <br>
    Telefone: ({{$calculo3[2]['ddd'] ?? ' '}}) {{ $calculo3[2] ['telefone'] ?? '' }}
    @switch($calculo3[2] ['ddd'])
        @case (11)
        São Paulo - SP
            @break
        @case (32)
        Juiz de Fora - MG
            @break
        @case (85)
        Fortaleza - CE
            @break
 @default
        Estado não identificado
    @endswitch
@endisset
{{--

@switch($variavel) - "Olhe para essa variável"
@case('valor') - "Se for esse valor, faça isso:"
@break - "Pare aqui, não continue"
@default - "Se não for nenhum dos casos acima, faça isso"

--}}
