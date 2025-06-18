

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores Cadastrados</h3>
@elseif(count($fornecedores) > 10 )
    <h3>Existem Vários Fornecedores</h3>
@else
    <h3>Ainda Não Existem Fornecedores Cadastrados</h3>
@endif




{{-- @dd ('$fornecedores') -> Exibe o conteúdo da variável de forma formatada e legível  e Interrompe a execução do script imediatamente após mostrar os dados
@dd ('fornecedores');
--}}
