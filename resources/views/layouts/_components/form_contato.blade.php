{{ $slot }} {{-- o slot pode ser colocado em qualquer parte do codigo que ele será replicado o que está dentro de component--}}
        <form action="{{ route('contato3') }}" method="get" >  {{-- 1- colocar route e o metodo--}}
            <input name="Nome"  type="text" placeholder="Nome" class="borda-preta"> {{-- 2- colocar name em todos os campos --}}
            <br>
            <input name="Telefone" type="text" placeholder="Telefone" class="borda-preta">
            <br>
            <input name="email" type="text" placeholder="E-mail" class="borda-preta">
            <br>
            <select name="motivo_contato" class="borda-preta">
                <option value="">Qual o motivo do contato?</option>
                <option value="1">Dúvida</option>
                <option value="2">Elogio</option>
                <option value="3">Reclamação</option>
            </select>
            <br>
            <textarea name="mensagem" class="borda-preta">Preencha aqui a sua mensagem</textarea>
            <br>
            <button type="submit" class="borda-preta">ENVIAR</button>
        </form>
