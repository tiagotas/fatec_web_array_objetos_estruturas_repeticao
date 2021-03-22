<?php

include "Animal.php";

include "Gato.php";
include "Cachorro.php";

$nicolau = new Gato("Nicolau");
$nicolau->miar();
$nicolau->comer("Wiskas");
$nicolau->dormir();

echo "<hr />";

$mel = new Cachorro("Mel");
$mel->latir();
$mel->comer("Sache");
$mel->dormir();

echo "<hr />";


$lista_gatos = [];
$lista_gatos[] = new Gato("Cinzão");   // 0
$lista_gatos[] = new Gato("Mimi");     // 1
$lista_gatos[] = new Gato("Nikinha");  // 2
$lista_gatos[] = $nicolau;             // 3

//var_dump($lista_gatos);

$lista_gatos[2]->miar();

echo "<hr />";


foreach($lista_gatos as $gato_da_vez)
{
    $gato_da_vez->miar();
}





