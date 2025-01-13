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