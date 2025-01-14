<?php

for($i = 0; $i <= 5; $i++){

    echo "Iterazione n°$i<br>";
    
}

echo '<hr>';

//Break e continue
for($i = 0; $i <= 10; $i++){
    
    if($i == 3){
        continue;//Salta l'iterazione numero 3.
        //Tutte le volte che continue viene eseguito, tutto il codice che si trova più in basso (nel for) non verrà letto e si procederà con la successiva iterazione
    }
    
    if($i == 8){
        echo "Ciclo for interrotto con valore $i";
        break;
    }

    echo "Iterazione n°$i<br>";
}

echo '<hr>';

//ciclare array con for e altri cicli con scopo generico
//Avendo a disposizione solo degli indici generati in maniera automatica, non posso confor andare a ciclare un re associativo perché non dispongo delle chiavi testuali. 
$pizze = ['Margherita','Diavola','Marinara','Capricciosa'];

for($i = 0; $i < count($pizze); $i++){

    $pizza = $pizze[$i];

    echo $pizza.'<br>';
}