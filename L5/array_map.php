<?php

$numeri = [1,2,3,4,5,6,7,8,9];
//Creo un nuovo array contenente tutti i numeri dell'array numeri moltiplicati per due. 
$raddoppiati = array_map(function($n){
    return $n * 2;
}, $numeri);

echo '<pre>';
print_r($raddoppiati);
echo '</pre>';

//combinare due array
//Se gli arrei hanno dimensioni diverse, l'operazione si ferma al più corto 
$numeri = [1,2,3,4,5,6,7,8,9];
$numeri2 = [10,12,13,14,15,16,17,18,19];

$somme = array_map(function($x, $y){
    return $x + $y;
}, $numeri, $numeri2);

echo '<pre>';
print_r($somme);
echo '</pre>';