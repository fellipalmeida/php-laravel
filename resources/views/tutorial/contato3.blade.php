@extends('layouts.basico') {{-- Indica que o template atual herda de um template pai (layout) --}}

@section('titulo', 'Contato') {{-- ele pega a variavel declarada no yield no basico.blade.php e você logo em seguida declara oq que você quiser de nome no titulo--}}

@section('conteudo') {{-- indica que a seção toda dentro de section  de html deve entrar no template pai--}}
    @include('layouts.partials.topo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal"> {{-- como fazer um formulario get? --}}
                   @component('layouts._components.form_contato')
                       <p>A nossa Equipe Analisará a sua mensagem e retornaremos o mais brevemente possível</p>
                       <p>nosso tempo médio de resposta é de 48 horas</p>
                    @endcomponent
                </div>
            </div>
        </div>

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="img/facebook.png">
                <img src="img/linkedin.png">
                <img src="img/youtube.png">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="img/mapa.png">
            </div>
        </div>

@endsection

