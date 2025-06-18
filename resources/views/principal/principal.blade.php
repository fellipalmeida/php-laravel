<title>Meu Site Laravel</title>

<h3>Principal (view)</h3>
{{-- Criando menu para outras rotas --}}

<ul>
    <li>
        <a href="{{ route('site.clientes') }}"> Principal </a>   {{-- utilizando name -> --}}
    </li>

    <li>
        <a href="/sobre-nos"> Sobre Nós </a>
    </li>

    <li>
        <a href="/contatos"> Contato </a>
    </li>
</ul>
