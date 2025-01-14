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