<br>
 @php $i = 0  @endphp
@while(isset($calculo5[$i]))
    Nome: {{$calculo5[$i]['nome'] }}
    <br>
    Status: {{$calculo5[$i]['status'] }}
    <br>
    CNPJ: {{$calculo5[$i]['cnpj'] ?? '' }}
    <br>
    Telefone: ({{$calculo5[$i]['ddd'] ?? ' '}}) {{ $calculo5[$i] ['telefone'] ?? '' }}
    <hr>
    @php $i++  @endphp
 @endwhile

{{--continua fazendo algo ENQUANTO uma condição for verdadeira


@php($nivel = 1)
@php($experiencia = 850)

<h3>Progresso do jogador:</h3>
@while($experiencia >= 100)
    <p>✅ Nível {{ $nivel }} completo!</p>
    @php($experiencia -= 100)
    @php($nivel++)
@endwhile

<p>🎮 Nível atual: {{ $nivel }}</p>
<p>📊 Experiência restante: {{ $experiencia }}/100</p>



--}}

