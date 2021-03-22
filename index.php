<?php

// $lista_nomes = [];

$lista_nomes = array();

                           // i = index = índice
$lista_nomes[] = "João";   // 0
$lista_nomes[] = "Maria";  // 1
$lista_nomes[] = "José";   // 2
$lista_nomes[] = "Joana";  // 3
$lista_nomes[] = "Marcos";  // 4

echo count($lista_nomes); // sizeof
echo "<br />";

/**
 * Testando se uma posição (i) está definida.
 */
if(isset($lista_nomes[2]))
    echo $lista_nomes[2];
else
    echo "índice não existe.";

echo "<br />";

 /**
  * Usando o operador ternário para testar
  */   
$i = 4;

echo isset($lista_nomes[$i]) ? $lista_nomes[$i] : "índice não existe.";

echo "<br />";

/**
 * Utilizando a estrutura de repetição FOR para percorrer o array
 */

 $total_posicoes_array = count($lista_nomes);

 for($i=0; $i<$total_posicoes_array; $i++)
 {
    /*if(!isset($lista_nomes[$i]))
        break;*/

    echo "Posição do índice está em " . $i . " com valor ";
    
    echo isset($lista_nomes[$i]) ? $lista_nomes[$i] : "índice não existe.";    
    
    echo "<br />";
 }







