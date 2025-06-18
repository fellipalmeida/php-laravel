
<br>

Fornecedor {{ $fornecedoress[0]['nome'] }}

<br>

Status: {{ $fornecedoress[0]['status'] }}

<br>

@if( ($fornecedoress[0]['status'] == 'online') )
    Fornecedor Ativo
    <br>
@endif

@unless($fornecedoress[0]['status'] == 'online') {{-- @unless executa se o retorno for false --}}
    Fornecedor Inativo
@endunless
<br>
