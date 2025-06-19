<h3>Lista de usuarios</h3>
@isset($usuarios)
@forelse($usuarios as $usuario)
    <p>Nome: {{ $usuario['nome2'] }}</p>
    <p>Idade: {{ $usuario['idade'] }} anos</p>
    <hr>
@empty
    <p>Não informado </p>
@endforelse
@endisset
