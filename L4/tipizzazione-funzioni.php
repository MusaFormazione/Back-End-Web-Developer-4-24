<?php
//Abilito il controllo rigoroso dei tipi 
declare(strict_types=1);

function somma(int $a, int $b):void{
    echo $a + $b;
}

somma(5, 6);

/**
 * int => numeri senza decimali
 * float => numeri con decimali
 * string => string
 * bool => booleani
 * array => liste di valori indicizzati
 * null => valore assente
 * object => istanze di classi
 * callable => funzione o metodo
 * iterable => array, oggetti iterabili
 * 
 * mixed => qualsiasi dato (meglio non usarlo)
 * void => la funzione non restituisce dati
 * never => la funzione non termina mai in  modo normale
 */

 function terminaConErrore():never{
    throw new Exception("Errore critico: il programma non può continuare la sua esecuzione");
 }


//union type (PHP 8+)
//Permette di accettare più tipi per un parametro o per un return
function funzioneConUnion(string|int $dato):string|int{
    return [];
    //Fatal error: Uncaught TypeError: funzioneConUnion(): Argument #1 ($dato) must be of type string|int, array given
}

// funzioneConUnion(5);


function funzioneConCast(int|string $dato){
    //Convertiamo il valore in string e lo restituiamo 
    return (string)$dato;
}

echo gettype(funzioneConCast(4));//string '4'
echo funzioneConCast(4);


//nullable types (possibili null)
function trovaUtente(?int $id):?string{

    if($id === null){
        //L'utente non è loggato, effettua operazioni di sicurezza e magari lo sposto in altre pagine. 
        return null;//return blocca la funzione
    }

    return "Utente $id";

}