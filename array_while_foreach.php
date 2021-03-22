<?php
/*
$lista_nomes = array();

$lista_nomes[] = "João";   // 0
$lista_nomes[] = "Maria";  // 1
$lista_nomes[] = "José";   // 2
$lista_nomes[] = "Joana";  // 3
$lista_nomes[] = "Marcos";  // 4
*/

//
//                0         1        2      3         4   
$lista_nomes = ['João', 'Maria', 'José', 'Joana', 'Marcos', 'Romário'];


reset($lista_nomes);

$nomes_ao_contrario = array_reverse($lista_nomes);

while( key($nomes_ao_contrario) !== null )
{
    $posicao = key($nomes_ao_contrario);
    $valor   = current($nomes_ao_contrario);

    echo "A posição atual é $posicao cujo valor é $valor <br />";

    next($nomes_ao_contrario);
}

echo '<hr />';

// Para cada
foreach($lista_nomes as $nome_corrente)
{
    echo "o nome da vez é $nome_corrente <br />";
}
