{{-- utilizando o @include  --}}
<div class="topo">

    <div class="logo">
        <img src="{{ asset('img/logo.png')}}">  {{-- asset pega como referencia a pasta public  --}}
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('principal3') }}">Principal</a></li>  {{-- route no Laravel é usada para gerar URLs baseadas nas rotas nomeadas definidas no seu arquivo de rotas web.php --}}
            <li><a href="{{ route('sobrenos3') }}">Sobre Nós</a></li>
            <li><a href="{{ route('contato3') }}">Contato</a></li>
        </ul>
    </div>
</div>
