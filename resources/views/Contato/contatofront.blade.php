<h3>Contato Nos (view)</h3>

{{ 'Texto de teste' }}
<br>
<?= 'texto de teste2' ?>
<br>

@if ( $idade >= 18)
    <h3> você é maior de idade</h3>
@else
    <h3>  você é menor de idade </h3>
    <br>
@endif


@php
//echo 'Teste Teste Teste';

/*if ( $idade >= 18) {
    echo 'você é maior de idade';
}
 else {
    echo 'você é menor de idade';
} */

@endphp
