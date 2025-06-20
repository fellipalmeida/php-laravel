@extends('layouts.basico')

@section('titulo', $titulo) {{-- pegando a variavel do controlador --}}
@section('conteudo')

    @include('layouts.partials.topo')
        <div class="conteudo-destaque">

            <div class="esquerda">
                <div class="informacoes">
                    <h1>Sistema Super Gestão</h1>
                    <p>Software para gestão empresarial ideal para sua empresa.<p>
                    <div class="chamada">
                        <img src="/img/check.png">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="chamada">
                        <img src="img/check.png">
                        <span class="texto-branco">Sua empresa na nuvem</span>
                    </div>
                </div>

                <div class="video">
                    <img src="img/player_video.jpg">
                </div>
            </div>

            <div class="direita">
                <div class="contato">
                    <h1>Contato</h1>
                    <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                    <form action="{{route('principal3')}}" method="post" > {{-- colocar a route e o method --}}
                        @csrf {{-- token que precisa ter toda vez que utilizar metodo post --}}
                        <input name="Nome" type="text" placeholder="Nome" class="borda-branca">
                        <br>
                        <input name="Telefone" type="text" placeholder="Telefone" class="borda-branca"> {{--colocar o name nos campos--}}
                        <br>
                        <input name="Email" type="text" placeholder="E-mail" class="borda-branca">
                        <br>
                        <select name="Motivo do contato" class="borda-branca">
                            <option value="">Qual o motivo do contato?</option>
                            <option value="1">Dúvida</option>
                            <option value="2">Elogio</option>
                            <option value="3">Reclamação</option>
                        </select>
                        <br>
                        <textarea name="mensagem" class="borda-branca">Preencha aqui a sua mensagem</textarea>
                        <br>
                        <button type="submit" class="borda-branca">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
