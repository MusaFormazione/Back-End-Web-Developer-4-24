<?php

//Operatore ternario 
// $variabile = (condizione) ? valore se vero : valore se falso
$anni = 2;
$messaggio = ($anni >= 18) ? 'Sei maggiorenne<br>' : 'Sei minorenne<br>';
echo $messaggio;

function controlloAnni(int $anni):string{
    return ($anni >= 18) ? "Hai $anni anni e sei maggiorenne<br>" : "Hai $anni anni e sei minorenne<br>";
}
echo 'Esempio di ternario in una funzione: <br>';
echo controlloAnni(5);
echo controlloAnni(50);

//Operatore di coalescenza nulla ( ?? )
$user = null;
$risultato = $user ?? 'Utente non loggato<br>';

echo $risultato;

//rest parameter operator (argomenti variadici)

function somma(...$numeri){
    return array_sum($numeri);
}

echo '<pre>';
print_r(somma(2,5,3,4,5,6,7,8));
echo '</pre>';

//destrutturazione
echo '<h2>Destrutturazione</h2>';

$numeri = [1,2,3];
[$a, $b, $c] = $numeri;//Se i tassi ristretta, consigliata 
list($a, $b, $c) = $numeri;//Altra sintassi valida, ma non consigliata.
echo "Valori destrutturati: a:$a, b:$b, c:$c";

//destrutturazione array associativo
$pizza = [
    'gusto' => 'Margherita',
    'prezzo' => 5
];

['gusto' => $gusto, 'prezzo' => $prezzo] = $pizza;

echo "La pizza $gusto costa $prezzo €";

//Destrutturazione con riferimento al valore originale
$array = ['a','b','c'];

echo '<pre>';
print_r($array);
echo '</pre>';

[$primo, &$secondo, $terzo] = $array;

$primo = "X";//Questo assegnamento modifica solo ed esclusivamente il valore della variabile primo. 
$secondo = "Z";//Mentre in questo caso modifico il valore della variabile $secondo, e anche il valore nell'array dal quale è stato estrapolato 
echo "Primo: $primo, secondo: $secondo, terzo: $terzo";

echo '<pre>';
print_r($array);
echo '</pre>';