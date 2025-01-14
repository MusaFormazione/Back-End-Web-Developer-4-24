<?php

//Inizializzo il contatore di partenza che mi servirà per far sì che il ciclo si avvii, ma anche che si fermi 
$i = 0;

//La condizione di partenza deve essere trudy, altrimenti il ciclo non farà neanche un'iterazione. 
//Gestendo correttamente i numeri, io posso utilizzare wild per effettuare un numero definito di iterazioni. 
while($i <= 5){
    //In questo caso il mio obiettivo è scrivere a schermo direttamente nella pagina HTML, quindi l'output che vado a predisporre con ECHO è arricchito con dell'HTML 
    echo "Iterazione numero: $i<br>";

    //Al termine della iterazione, io incremento $i di uno. Questo perché altrimenti arriverei ad avere un ciclo infinito, Quindi questo incremento è fondamentale, se non la metti sia avvia un ciclo infinito 
    $i++;
}
unset($i);//Elimino la variabile i liberando della memoria 

echo '<hr>';

//Esempio di wile per elaborare una stringa da scrivere all'interno di un file. 
$count = 0;//Il contatore che ci permette di far funzionare il ciclo 
$output = '';//Un accumulatore che risentirà di una serie di modifiche durante l'esecuzione del ciclo while. 

while($count <= 100){

    //Ad ogni iterazione del ciclo vado ad aggiungere una stringa a quella già esistente nella variabile output. 
    $output .= "Iterazione numero: $count \r\n";

    $count++;
}

//Verifico com'è fatto l'output 
echo $output;

//Creo il file e scrivo al suo interno il valore della variabile output
file_put_contents('output.txt', $output);

