<?php

$nome = 'Mario';

function modificaNome(){
    //All'interno della funzione la variabile nome è una variabile totalmente differente. La presenza di una variabile nome anche nello scope globale non influenza in nessun modo lo svolgimento della funzione attuale. 
    //Viceversa, lo svolgimento della funzione attuale non influenza in nessun modo ciò che accade nello scope globale 
    $nome = 'Pippo';
    echo "Echo interno: $nome<br>";
}

//In questo caso la modifica del nome non ha successo. 
modificaNome();

echo "Echo Esterno: $nome<br>";

echo '<hr>';


//esempio di commento fatto bene
/**
 *  Ti spiego cosa fa la funzione
 * 
 *  $nome : ti spiego a cosa serve nome
 * 
 */
function modificaNomePerDavvero(&$nome){
    //con il simbolo &
    //Se il valore è passato alla funzione tramite una variabile, allora verrà modificato anche il valore originale di quella variabile. 
    $nome = 'Marco';
    echo "echo interno $nome<br>";
}

modificaNomePerDavvero($nome);
echo "Echo Esterno: $nome<br>";

//Attenzione a questa pratica effettuala solo se sei totalmente certo/a
//Non vorresti finire a distruggere o compromettere array di dati che hai ricevuto dal database e che ti servono per l'esecuzione del resto dello script

